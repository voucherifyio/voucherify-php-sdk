<?php
    function generateRandomString($length = 10) {
        $randomString = '';
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $max = strlen($characters) - 1;

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $max)];
        }

        return $randomString;
    }

    function generateRandomVoucherCodes($baseCode, $count, $length = 6) {
        $voucherCodes = [];
        for ($i = 0; $i < $count; $i++) {
            $voucherCodes[] = $baseCode . '-' . generateRandomString($length);
        }
        return $voucherCodes;
    }

    function removeDynamicFields($data, array $fieldsToRemove) {
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
    
    function loadSnapshot($path) {
        error_log($path);
        $path = __DIR__ . "/../snapshots/$path.json";
        if (!file_exists($path)) {
            throw new Exception("File not found: $path");
        }
        $jsonContent = file_get_contents($path);
        return $jsonContent;
    }

    function validatePayloads($snapshotPath, $response, $keysToRemove) {
        $snapshot = loadSnapshot($snapshotPath);
        $filteredSnapshot = removeDynamicFields(json_decode($snapshot), $keysToRemove);
        $filteredResponse = removeDynamicFields(json_decode($response), $keysToRemove);
        return [$filteredSnapshot, $filteredResponse];
    }

    function consoleLog($value) {
        return error_log(json_encode($value, JSON_PRETTY_PRINT));
    }
?>