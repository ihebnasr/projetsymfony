<?php

namespace App\Repository;

use App\Entity\OffreCandidat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method OffreCandidat|null find($id, $lockMode = null, $lockVersion = null)
 * @method OffreCandidat|null findOneBy(array $criteria, array $orderBy = null)
 * @method OffreCandidat[]    findAll()
 * @method OffreCandidat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OffreCandidatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OffreCandidat::class);
    }

    // /**
    //  * @return OffreCandidat[] Returns an array of OffreCandidat objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?OffreCandidat
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
