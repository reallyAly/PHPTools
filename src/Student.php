<?php
/**
 * PHP Version 8
 *
 * Student class
 *
 * @category Entity
 * @package  Aly_PHPTools
 * @author   Alysson Victor <developeralysson@gmail.com>
 * @license  Open Source
 * @link     github.com/reallyAly
 */

declare(strict_types=1);

namespace Aly\PhpTools;

/**
 * Student entity class
 *
 * @category Entity
 * @package  Aly_PHPTools
 * @author   Alysson Victor <developeralysson@gmail.com>
 * @license  Open Source
 * @link     github.com/reallyAly
 */
class Student
{
    /**
     * Student firstname
     *
     * @var string
     */
    private string $_firstname;

    /**
     * Student lastname
     *
     * @var string
     */
    private string $_lastname;

    /**
     * Student age
     *
     * @var int
     */
    private int $_age;

    /**
     * Get method for firstname attribute
     *
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->_firstname;
    }

    /**
     * Set method for firstname attribute
     *
     * @param string $firstname
     *
     * @return void
     */
    public function setFirstname(string $firstname): void
    {
        $this->_firstname = $firstname;
    }

    /**
     * Get method for lastname attribute
     *
     * @return string
     */
    public function getLastname(): string
    {
        return $this->_lastname;
    }

    /**
     * Set method for lastname attribute
     *
     * @param string $lastname
     *
     * @return void
     */
    public function setLastname(string $lastname): void
    {
        $this->_lastname = $lastname;
    }

    /**
     * Get method for age attribute
     *
     * @return int
     */
    public function getAge(): int
    {
        return $this->_age;
    }

    /**
     * Set method for age attribute
     *
     * @param int $age
     *
     * @return void
     */
    public function setAge(int $age): void
    {
        $this->_age = $age;
    }

    /**
     * Method to check if the student is over eighteen years old
     *
     * @return bool
     */
    public function isOverEighteenYearsOld(): bool
    {
        return $this->_age > 18;
    }
}