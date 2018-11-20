<?php

namespace App\Repository;

use App\Entity\Erem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Erem|null find($id, $lockMode = null, $lockVersion = null)
 * @method Erem|null findOneBy(array $criteria, array $orderBy = null)
 * @method Erem[]    findAll()
 * @method Erem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EremRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Erem::class);
    }

    // /**
    //  * @return Erem[] Returns an array of Erem objects
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
    public function findOneBySomeField($value): ?Erem
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
