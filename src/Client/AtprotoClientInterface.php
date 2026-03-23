<?php

namespace Drupal\pds_sync\Client;

/**
 * Defines a contract for the AT Protocol client.
 */
interface AtprotoClientInterface {

  public function getDid(): string;

  /**
   * Repo Methods
   */
  public function putRecord(array $params): mixed;
  public function createRecord(array $params): mixed;
  public function getRecord(array $params): mixed;
  public function listRecords(array $params): mixed;
  public function deleteRecord(array $params): bool;

  /**
   * Feed/Social Methods
   */
  public function getPostThread(string $uri, int $depth = 1): mixed;
  public function getLikes(string $uri, int $limit = 50): mixed;
  public function getRepostedBy(string $uri, int $limit = 50): mixed;
  
}
