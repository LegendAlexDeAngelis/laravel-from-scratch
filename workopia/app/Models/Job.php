<?php

namespace App\Models;

class Job
{
  public static function all(): array
  {
    return [
      [
        "id" => 1,
        "title" => "Software Engineer",
        "description" => "We are looking for a software engineer to join our team.",
      ],
      [
        "id" => 2,
        "title" => "Product Manager",
        "description" => "We are looking for a product manager to join our team.",
      ],
      [
        "id" => 3,
        "title" => "Designer",
        "description" => "We are looking for a designer to join our team.",
      ],
      [
        "id" => 4,
        "title" => "Customer Support",
        "description" => "We are looking for a customer support to join our team.",
      ],
      [
        "id" => 5,
        "title" => "Sales Representative",
        "description" => "We are looking for a sales representative to join our team.",
      ],
    ];
  }
}
