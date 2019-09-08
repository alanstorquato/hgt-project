<?php

namespace App\Repository;

use App\Entity\FormasPagamento;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FormasPagamento|null find($id, $lockMode = null, $lockVersion = null)
 * @method FormasPagamento|null findOneBy(array $criteria, array $orderBy = null)
 * @method FormasPagamento[]    findAll()
 * @method FormasPagamento[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FormasPagamentoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FormasPagamento::class);
    }

    // /**
    //  * @return FormasPagamento[] Returns an array of FormasPagamento objects
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
    public function findOneBySomeField($value): ?FormasPagamento
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
