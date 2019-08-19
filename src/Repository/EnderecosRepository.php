<?php

namespace App\Repository;

use App\Entity\Enderecos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Enderecos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Enderecos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Enderecos[]    findAll()
 * @method Enderecos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnderecosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Enderecos::class);
    }

    // /**
    //  * @return Enderecos[] Returns an array of Enderecos objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Enderecos
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
