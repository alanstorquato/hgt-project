<?php

namespace App\Repository;

use App\Entity\Atracoes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Atracoes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Atracoes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Atracoes[]    findAll()
 * @method Atracoes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AtracoesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Atracoes::class);
    }

    // /**
    //  * @return Atracoes[] Returns an array of Atracoes objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Atracoes
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
