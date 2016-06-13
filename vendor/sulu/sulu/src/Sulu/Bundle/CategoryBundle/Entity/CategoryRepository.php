<?php

/*
 * This file is part of Sulu.
 *
 * (c) MASSIVE ART WebServices GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Sulu\Bundle\CategoryBundle\Entity;

use Doctrine\ORM\NoResultException;
use Doctrine\ORM\Query;
use Gedmo\Tree\Entity\Repository\NestedTreeRepository;
use Sulu\Bundle\CategoryBundle\Category\CategoryRepositoryInterface;

/**
 * CategoryRepository.
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategoryRepository extends NestedTreeRepository implements CategoryRepositoryInterface
{
    /**
     * Gets a category-entity by id.
     *
     * @param $id
     *
     * @return mixed|null
     */
    public function findCategoryById($id)
    {
        try {
            $queryBuilder = $this->getCategoryQuery()->where('category.id = :categoryId');
            $query = $queryBuilder->getQuery();
            $query->setParameter('categoryId', $id);

            return $query->getSingleResult();
        } catch (NoResultException $ex) {
            return;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function findCategoryByKey($key)
    {
        try {
            $queryBuilder = $this->getCategoryQuery()->where('category.key = :categoryKey');
            $query = $queryBuilder->getQuery();
            $query->setParameter('categoryKey', $key);

            return $query->getSingleResult();
        } catch (NoResultException $ex) {
            return;
        }
    }

    /**
     * Returns all categories. Can be filtered with parent and depth.
     *
     * @param number      $parent    the id of the parent to filter for
     * @param number      $depth     the depth-level to filter for
     * @param string|null $sortBy    column name to sort the categories by
     * @param string|null $sortOrder sort order
     *
     * @return mixed|null
     */
    public function findCategories($parent = null, $depth = null, $sortBy = null, $sortOrder = null)
    {
        try {
            $queryBuilder = $this->getCategoryQuery();
            $queryBuilder->andWhere('category.parent IS NULL');

            if ($parent !== null) {
                $queryBuilder->andWhere('categoryParent.id = :parentId');
            }
            if ($depth !== null) {
                $queryBuilder->andWhere('category.depth = :depth');
            }

            if ($sortBy) {
                $sortOrder = ($sortOrder) ? $sortOrder : 'asc';
                $queryBuilder->addOrderBy('category.' . $sortBy, $sortOrder);
            }

            $query = $queryBuilder->getQuery();
            if ($parent !== null) {
                $query->setParameter('parentId', $parent);
            }
            if ($depth !== null) {
                $query->setParameter('depth', $depth);
            }

            return $query->getResult();
        } catch (NoResultException $ex) {
            return;
        }
    }

    /**
     * Returns the children for a given category.
     *
     * @param int         $key       the key of the category to return the children for
     * @param string|null $sortBy    column name to sort by
     * @param string|null $sortOrder sort order
     *
     * @return Category[]
     */
    public function findChildren($key, $sortBy = null, $sortOrder = null)
    {
        try {
            $queryBuilder = $this->getCategoryQuery()
                ->from('SuluCategoryBundle:Category', 'parent')
                ->andWhere('parent.key = :key')
                ->andWhere('category.parent = parent');

            if ($sortBy) {
                $sortOrder = ($sortOrder) ? $sortOrder : 'asc';
                $queryBuilder->addOrderBy('category.' . $sortBy, $sortOrder);
            }

            $query = $queryBuilder->getQuery();
            $query->setParameter('key', $key);

            return $query->getResult();
        } catch (NoResultException $ex) {
            return;
        }
    }

    /**
     * Finds the categories with the given ids.
     *
     * @param array $ids The ids to load
     *
     * @return Category[]
     */
    public function findCategoryByIds(array $ids)
    {
        try {
            if (empty($ids)) {
                throw new NoResultException();
            }

            $queryBuilder = $this->getCategoryQuery();

            $queryBuilder->where($queryBuilder->expr()->in('category.id', ':ids'));
            $queryBuilder->setParameter('ids', $ids);

            return $queryBuilder->getQuery()->getResult();
        } catch (NoResultException $ex) {
            return [];
        }
    }

    /**
     * Returns the general part of the query.
     *
     * @return \Doctrine\ORM\QueryBuilder
     */
    private function getCategoryQuery()
    {
        return $this->createQueryBuilder('category')
            ->leftJoin('category.meta', 'categoryMeta')
            ->leftJoin('category.translations', 'categoryTranslations')
            ->leftJoin('category.parent', 'categoryParent')
            ->leftJoin('category.children', 'categoryChildren')
            ->addSelect('category')
            ->addSelect('categoryMeta')
            ->addSelect('categoryTranslations')
            ->addSelect('categoryParent')
            ->addSelect('categoryChildren');
    }
}