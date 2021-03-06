<?php



/**
 * Skeleton subclass for performing query and update operations on the 'content' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.bookstore
 */
class ContentQuery extends BaseContentQuery
{
  public function filterByCategoryName($name)
  {
    return $this
      ->useCategoryQuery()
        ->filterByName($name)
      ->endUse();
  }
}
