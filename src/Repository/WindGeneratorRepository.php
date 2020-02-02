<?php

namespace App\Repository;

use App\Entity\WindGenerator;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method WindGenerator|null find($id, $lockMode = null, $lockVersion = null)
 * @method WindGenerator|null findOneBy(array $criteria, array $orderBy = null)
 * @method WindGenerator[]    findAll()
 * @method WindGenerator[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WindGeneratorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WindGenerator::class);
    }

    // /**
    //  * @return WindGenerator[] Returns an array of WindGenerator objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?WindGenerator
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
