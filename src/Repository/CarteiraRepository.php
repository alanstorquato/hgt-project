<?php

namespace App\Repository;

use App\Entity\Carteira;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Carteira|null find($id, $lockMode = null, $lockVersion = null)
 * @method Carteira|null findOneBy(array $criteria, array $orderBy = null)
 * @method Carteira[]    findAll()
 * @method Carteira[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CarteiraRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Carteira::class);
    }

    // /**
    //  * @return Carteira[] Returns an array of Carteira objects
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
    public function findOneBySomeField($value): ?Carteira
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
