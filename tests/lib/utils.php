<?php
function generateRandomString($length = 10)
{
    $randomString = '';
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    $max = strlen($characters) - 1;

    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $max)];
    }

    return $randomString;
}

function generateRandomVoucherCodes($baseCode, $count, $length = 6)
{
    $voucherCodes = [];
    for ($i = 0; $i < $count; $i++) {
        $voucherCodes[] = $baseCode . '-' . generateRandomString($length);
    }
    return $voucherCodes;
}

function removeDynamicFields($data, array $fieldsToRemove)
{
    if (is_array($data)) {
        foreach ($data as $key => &$value) {
            if (in_array($key, $fieldsToRemove)) {
                unset($data[$key]);
            } elseif (is_array($value) || is_object($value)) {
                $data[$key] = removeDynamicFields($value, $fieldsToRemove);
            }
        }
    } elseif (is_object($data)) {
        $dataArray = (array)$data;
        foreach ($dataArray as $key => $value) {
            if (in_array($key, $fieldsToRemove)) {
                unset($dataArray[$key]);
            } elseif (is_array($value) || is_object($value)) {
                $dataArray[$key] = removeDynamicFields($value, $fieldsToRemove);
            }
        }
        $data = (object)$dataArray;
    }
    return $data;
}

function loadSnapshot($path)
{
    error_log($path);
    $path = __DIR__ . "/../snapshots/$path.json";
    if (!file_exists($path)) {
        throw new Exception("File not found: $path");
    }
    $jsonContent = file_get_contents($path);
    return $jsonContent;
}

function validatePayloads($snapshotPath, $response, $keysToRemove)
{
    $snapshot = loadSnapshot($snapshotPath);
    $filteredSnapshot = removeDynamicFields(json_decode($snapshot), $keysToRemove);
    $filteredResponse = removeDynamicFields(json_decode($response), $keysToRemove);
    return [$filteredSnapshot, $filteredResponse];
}

function filterSnapshot($snapshotPath, $keysToRemove)
{
    $snapshot = loadSnapshot($snapshotPath);
    $filteredSnapshot = removeDynamicFields(json_decode($snapshot), $keysToRemove);
    return $filteredSnapshot;
}

function consoleLog($value)
{
    return error_log(json_encode($value, JSON_PRETTY_PRINT));
}

function deepMatch($snapshot, $response, $path = [], &$errors = [])
{
    if (is_object($snapshot) && is_object($response)) {
        foreach ($snapshot as $key => $value) {
            $currentPath = array_merge($path, [$key]);
            if (!property_exists($response, $key)) {
                $errors[] = "Missing key in response: \"" . implode('->', $currentPath) . "\"";
                return false;
            }
            if (!deepMatch($value, $response->$key, $currentPath, $errors)) {
                return false;
            }
        }
        return true;
    } elseif (is_array($snapshot) && is_array($response)) {
        if (count($snapshot) !== count($response)) {
            $errors[] = "Array length mismatch at field: \"" . implode('->', $path) . "\". Snapshot: " . count($snapshot) . ", response: " . count($response);
            return false;
        }
        foreach ($snapshot as $index => $item) {
            $currentPath = array_merge($path, ["[$index]"]);
            if (!deepMatch($item, $response[$index], $currentPath, $errors)) {
                return false;
            }
        }
        return true;
    } else {
        if ($snapshot !== $response) {
            $snapshotStr = is_scalar($snapshot) ? (string)$snapshot : json_encode($snapshot);
            $responseStr = is_scalar($response) ? (string)$response : json_encode($response);
            $currentPath = implode('->', $path);

            $errors[] = "Mismatch at field: \"$currentPath\". Snapshot value: \"$snapshotStr\", response value: \"$responseStr\"";

            return false;
        }
        return true;
    }
}

function validateDeepMatch($snapshot, $response)
{
    $errors = [];
    $jsonDecodedResponse = json_decode($response);

    if (deepMatch($snapshot, $jsonDecodedResponse, [], $errors)) {
        return true;
    } else {
        return implode("\n", $errors);
    }
}
