<?php

namespace App\Repository;

use App\Entity\PaternalGrandparent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PaternalGrandparent>
 *
 * @method PaternalGrandparent|null find($id, $lockMode = null, $lockVersion = null)
 * @method PaternalGrandparent|null findOneBy(array $criteria, array $orderBy = null)
 * @method PaternalGrandparent[]    findAll()
 * @method PaternalGrandparent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PaternalGrandparentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PaternalGrandparent::class);
    }

//    /**
//     * @return PaternalGrandparent[] Returns an array of PaternalGrandparent objects
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

//    public function findOneBySomeField($value): ?PaternalGrandparent
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
