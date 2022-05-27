# Morrios Base

## Introduce

- Morris Base provides basic and reusable components for projects, aiming to quickly integrate basic capabilities for projects.

## Getting started

- Dependency requirements

| PHP Version | PHP Extension |
|:---------------------------:|:---------------------------:|
|  7.0 + |  None |

- How to install?

```composer require morrios/base```

- How to use?

  - **Struct**
    - Introduce
      > Because the Struct data type does not exist in PHP, the scene where arrays are used instead of structs often occurs in actual coding. This method will make it impossible for developers to clearly understand which keys exist in the array, and also need to handle exceptions that the key does not exist when getting the key. In order to optimize this problem, we provide the Stuct component, which converts the array of known keys into objects, and you can use -> elegantly to get the value of the corresponding key.
    - Demo
      ```php
      // Define YourStruct.php
      use Morrios\Struct\MorriosStruct;
      ...
      class YourStruct extends MorriosStruct
      {
          public $name;
      }
      
      // Get YourStruct instance
      // The first way
      $yourStruct = new YourStruct(['name' = 'Morrios']);
      // Another way
      $yourStruct = YourStruct::create(['name' = 'Morrios']);
      
      // Now you can easily get the properties of YourStruct anywhere
      $name = $yourStruct->name;
      
      // You can repopulate Struct's data at any time like this
      $yourStruct->fill(['name' => 'New Morrios']);
      
      // You can also easily get an array
      $yourStructArray = $yourStruct->toArray();
      ```


## Contribution Guidelines

- If you find a bug, please submit it [Issue](https://github.com/MorriosL/morrios-base/issues).
- If you want to submit code, welcome to submit pull request.

## LICENSE

[MIT LICENSE](LICENSE) &copy; Morrios
