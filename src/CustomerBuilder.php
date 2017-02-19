<?php

namespace Voucherify;

class CustomerBuilder
{
    private $_customer;

    public function __construct()
    {
        $this->_customer = (object)[];
    }

    public function setName($name)
    {
        $this->_customer->name = $name;
        return $this;
    }

    public function setEmail($email)
    {
        $this->_customer->email = $email;
        return $this;
    }

    public function setDescription($description)
    {
        $this->_customer->description = $description;
        return $this;
    }

    public function setMetadata($metadata)
    {
        $this->_customer->metadata = $metadata;
        return $this;
    }

    public function build()
    {
        return $this->_customer;
    }
}
