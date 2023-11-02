<?php

namespace Drupal\my_module\SeedData;

use Drupal\user\Entity\User;
use Drush\Drush;

/**
 * SeedDataGenerator.
 *
 * @package Drupal\my_module
 */
class SeedDataGenerator {

  /**
   * Function to create a seed data.
   *
   * @param string $entity
   *   The type of entity that needs to be created.
   *
   * @return null|int
   *   The number of entities created.
   */
  public function generate(string $entity){
    $count = 0;
    switch ($entity) {
      case 'user':
        $count = $this->seedUser();
        break;
    }
    return $count;
  }

  /**
   * @return int
   *   The number of users created.
   * @throws \Drupal\Core\Entity\EntityStorageException
   */
  private function seedUser() {
    $count = 0;

    $user = User::create();
    $user->setUsername('testUser');
    $user->setPassword('P@ssw0rd');
    $user->activate();
    $user->enforceIsNew();
    Drush::output()->writeln('<comment>Creating user test</comment>' );
    if ($user->save()) {
      $count++;
    }
    return $count;
  }
}