<?php

namespace App\Repository;

use App\Entity\FaixasEtarias;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FaixasEtarias|null find($id, $lockMode = null, $lockVersion = null)
 * @method FaixasEtarias|null findOneBy(array $criteria, array $orderBy = null)
 * @method FaixasEtarias[]    findAll()
 * @method FaixasEtarias[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FaixasEtariasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FaixasEtarias::class);
    }

    // /**
    //  * @return FaixasEtarias[] Returns an array of FaixasEtarias objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FaixasEtarias
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
