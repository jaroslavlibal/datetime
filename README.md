# DateTime

## Installation

Install package [`jaroslavlibal/datetime`](https://packagist.org/packages/jaroslavlibal/datetime) with [Composer](https://getcomposer.org/) and register the parts you need as the services.

```
composer require jaroslavlibal/datetime
```

## Factory

Retrieve the DateTime and DateTimeImmutable objects from the mockable and testable factory instead of direct `new \DateTime()` creation.

### Usage
```php
class Foo
{

   use JaroslavLibal\DateTime\Factory\DateTimeFactory;  
   use JaroslavLibal\DateTime\Factory\DateTimeFactory;  

   private DateTimeFactory;
   private DateTimeImmutableFactory;

   public function __construct(DateTimeFactory $dateTimeFactory, DateTimeImmutableFactory $dateTimeImmutableFactory)

   private function bar() {
      $dateTimeFactory->create();
      $dateTimeImmutableFactory->create();
   }
}
```
