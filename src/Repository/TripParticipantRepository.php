<?php

namespace App\Repository;

use App\Entity\TripParticipant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TripParticipant|null find($id, $lockMode = null, $lockVersion = null)
 * @method TripParticipant|null findOneBy(array $criteria, array $orderBy = null)
 * @method TripParticipant[]    findAll()
 * @method TripParticipant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TripParticipantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TripParticipant::class);
    }

    // /**
    //  * @return TripParticipant[] Returns an array of TripParticipant objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TripParticipant
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
