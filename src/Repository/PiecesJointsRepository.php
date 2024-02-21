<?php

namespace App\Repository;

use App\Entity\PiecesJoints;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PiecesJoints>
 *
 * @method PiecesJoints|null find($id, $lockMode = null, $lockVersion = null)
 * @method PiecesJoints|null findOneBy(array $criteria, array $orderBy = null)
 * @method PiecesJoints[]    findAll()
 * @method PiecesJoints[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PiecesJointsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PiecesJoints::class);
    }

//    /**
//     * @return PiecesJoints[] Returns an array of PiecesJoints objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?PiecesJoints
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
