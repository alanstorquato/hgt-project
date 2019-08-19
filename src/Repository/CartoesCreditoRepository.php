<?php

namespace App\Repository;

use App\Entity\CartoesCredito;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CartoesCredito|null find($id, $lockMode = null, $lockVersion = null)
 * @method CartoesCredito|null findOneBy(array $criteria, array $orderBy = null)
 * @method CartoesCredito[]    findAll()
 * @method CartoesCredito[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CartoesCreditoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CartoesCredito::class);
    }

    // /**
    //  * @return CartoesCredito[] Returns an array of CartoesCredito objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CartoesCredito
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
