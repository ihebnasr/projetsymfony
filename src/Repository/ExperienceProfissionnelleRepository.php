<?php

namespace App\Repository;

use App\Entity\ExperienceProfissionnelle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ExperienceProfissionnelle|null find($id, $lockMode = null, $lockVersion = null)
 * @method ExperienceProfissionnelle|null findOneBy(array $criteria, array $orderBy = null)
 * @method ExperienceProfissionnelle[]    findAll()
 * @method ExperienceProfissionnelle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExperienceProfissionnelleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ExperienceProfissionnelle::class);
    }

    // /**
    //  * @return ExperienceProfissionnelle[] Returns an array of ExperienceProfissionnelle objects
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
    public function findOneBySomeField($value): ?ExperienceProfissionnelle
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

public function findAllByCandidat($id)
{

    return $this->getEntityManager()
            ->createQuery(
                'SELECT e
                 FROM App:ExperienceProfissionnelle e 
                 INNER JOIN e.candidat c
                 WHERE c.id = :id'
    )->setParameter('id', $id)->getResult();

}


}
