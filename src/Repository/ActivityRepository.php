<?php
/**
 * Created by PhpStorm.
 * User: maievshabu
 * Date: 2018/6/25
 * Time: 上午9:51
 */

namespace App\Repository;

use App\Entity\Activity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class ActivityRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Activity::class);
    }

    /**
     * @param $amount
     * @return Activity[]
     */
    public function findAllGreaterThanAmount($amount): array
    {
        // automatically knows to select Products
        // the "p" is an alias you'll use in the rest of the query
        $qb = $this->createQueryBuilder('p')
            ->andWhere('p.amount >= :amount')
            ->setParameter('amount', $amount)
            ->orderBy('p.amount', 'ASC')
            ->getQuery();

        return $qb->execute();

    }

    /**
     * use  DQL
     * @param $amount
     * @return array
     */
    public function findAllGreaterThanPrice($amount): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT p
        FROM App\Entity\Activity p
        WHERE p.amount > :amount
        ORDER BY p.amount ASC'
        )->setParameter('amount', $amount);

        // returns an array of Product objects
        return $query->execute();
    }

    /**
     * use pdo
     * @param $amount
     * @return array
     */
    public function findAllGreaterThanPrice2($amount): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = 'SELECT *
        FROM activity p
        WHERE p.amount > :amount
        ORDER BY p.amount ASC' ;
        $stmt = $conn->prepare($sql);
        $stmt->execute(['amount' => $amount]);

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }
}