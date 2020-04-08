<?php
// Doctor.php

namespace Hospital;

class Doctor extends Staff
{

    public function setSalary($ammount)
    {
        // TODO: Implement setSalary() method.
        $this->salary = $ammount;
    }

    public function getSalary()
    {
        return $this->salary;
    }

}