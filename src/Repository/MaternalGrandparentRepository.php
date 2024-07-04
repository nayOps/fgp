<?php

namespace App\Repository;

use App\Entity\MaternalGrandparent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MaternalGrandparent>
 *
 * @method MaternalGrandparent|null find($id, $lockMode = null, $lockVersion = null)
 * @method MaternalGrandparent|null findOneBy(array $criteria, array $orderBy = null)
 * @method MaternalGrandparent[]    findAll()
 * @method MaternalGrandparent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MaternalGrandparentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MaternalGrandparent::class);
    }

//    /**
//     * @return MaternalGrandparent[] Returns an array of MaternalGrandparent objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?MaternalGrandparent
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
