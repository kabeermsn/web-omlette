<?php

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\hello_world\HelloWorldSalutation;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class HelloWorldController.
 */
class HelloWorldController extends ControllerBase
{

  /**
   * @var \Drupal\hello_world\HelloWorldSalutation
   * @author kabeer <kabeermsngmail.com>
   */
  protected $salutation;

  /**
   * HelloWorldController constructor.
   *
   * @param \Drupal\hello_world\HelloWorldSalutation $salutation
   */
  public function __construct(HelloWorldSalutation $salutation)
  {
    $this->salutation = $salutation;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container)
  {
    return new static(
      $container->get('hello_world.salutation')
    );
  }

  /**
   * Helloworld.
   *
   * @param string
   * @return string
   * Return Hello string.
   */
  public function helloWorld($param)
  {
    return [
      '#type' => 'markup',
      '#markup' => $this->salutation->getSalutation(),
    ];
  }
}
