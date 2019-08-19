<?php

namespace App\Repository;

use App\Entity\Setores;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Setores|null find($id, $lockMode = null, $lockVersion = null)
 * @method Setores|null findOneBy(array $criteria, array $orderBy = null)
 * @method Setores[]    findAll()
 * @method Setores[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SetoresRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Setores::class);
    }

    // /**
    //  * @return Setores[] Returns an array of Setores objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Setores
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
