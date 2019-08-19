<?php

namespace App\Repository;

use App\Entity\Produtores;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Produtores|null find($id, $lockMode = null, $lockVersion = null)
 * @method Produtores|null findOneBy(array $criteria, array $orderBy = null)
 * @method Produtores[]    findAll()
 * @method Produtores[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProdutoresRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Produtores::class);
    }

    // /**
    //  * @return Produtores[] Returns an array of Produtores objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Produtores
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
