<?php

// Nurse.php

namespace Hospital;

class Nurse extends Staff
{

    public function setSalary($ammount)
    {
        // TODO: Implement setSalary() method.
        $this->salary = $ammount;
    }

    public function getSalary()
    {
        return $this->salary/40;
    }
}