<?php

namespace App\Repository;

use App\Entity\Locais;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Locais|null find($id, $lockMode = null, $lockVersion = null)
 * @method Locais|null findOneBy(array $criteria, array $orderBy = null)
 * @method Locais[]    findAll()
 * @method Locais[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LocaisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Locais::class);
    }

    // /**
    //  * @return Locais[] Returns an array of Locais objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Locais
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
