<?php

namespace App\Repository;

use App\Entity\ItensPedidos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ItensPedidos|null find($id, $lockMode = null, $lockVersion = null)
 * @method ItensPedidos|null findOneBy(array $criteria, array $orderBy = null)
 * @method ItensPedidos[]    findAll()
 * @method ItensPedidos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ItensPedidosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ItensPedidos::class);
    }

    // /**
    //  * @return ItensPedidos[] Returns an array of ItensPedidos objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ItensPedidos
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
