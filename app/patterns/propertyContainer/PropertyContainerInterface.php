<?php

interface PropertyContainerInterface
{
    /**
     * @param string $propertyName
     * @param mixed $value
     * @return mixed
     */
    function addProperty($propertyName, $value);

    /**
     * @param string $propertyName
     * @return mixed
     */
    function deleteProperty($propertyName);

    /**
     * @param string $propertyName
     * @return mixed
     */
    function getProperty($propertyName);

    /**
     * @param string $propertyName
     * @param mixed $value
     * @return mixed
     */
    function updateProperty($propertyName, $value);
}
