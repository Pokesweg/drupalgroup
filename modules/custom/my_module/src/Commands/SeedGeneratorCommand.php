<?php

namespace Drupal\my_module\Commands;

use Drupal\my_module\SeedData\SeedDataGenerator;
use Drush\Commands\DrushCommands;
use Drush\Drush;

/**
 * Class SeedGeneratorCommand.
 *
 * @package Drupal\my_module\Commands
 */
class SeedGeneratorCommand extends DrushCommands {

  /**
   * Runs the mymoduleCreateSeeds command.
   *
   * @command mymodule-create-seeds
   * @aliases mymodulecs
   * @usage drush mymodule-create-seeds
   * Display 'Seed data created'
   */
  public function mymoduleCreateSeeds():void {
    $seed = new SeedDataGenerator();
    $count = $seed->generate('user');
    Drush::output()->writeln('<info>'. $count . ' user(s) created</info>' );
  }

}