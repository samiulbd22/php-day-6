<?php

namespace App\classes;

class Student
{
    protected $text;
    protected $students;
    protected $result = [];
    public function __construct($post = null)
    {
        if (isset($post['search']))
        {
            $this->text=$post['search'];
        }

    }

    public function getAllStudent()
    {
        return [
            0=>[
                'name' => 'shahabuddin',
                'mobile' => '12345',
                'email' => 'shahab@gmail.com',
                'address' => 'mirpur'
            ],
            1=>[
                'name' => 'arif',
                'mobile' => '2345678',
                'email' => 'arif@gmail.com',
                'address' => 'gulshan'
            ],
            2=>[
                'name' => 'jahangir',
                'mobile' => '987654',
                'email' => 'jahangir54@gmail.com',
                'address' => 'dhanmondi'
            ],
            3=>[
                'name' => 'shahin',
                'mobile' => '12345',
                'email' => 'shahin@gmail.com',
                'address' => 'mirpur'
            ],
            4=>[
                'name' =>  'opu',
                'mobile' => '987654',
                'email' => 'opu@gmail.com',
                'address' => 'formget'
            ]
        ];
    }
    public function getStudentBySearchText()
    {
        $this->students = $this->getAllStudent();
        foreach ($this->students as $student)
        {
            if ($this->text == $student['name'])
            {
                $this->result =$student;
                break;
            }
        }
        return $this->result;
    }
}