<?php

namespace App\Repository;

use App\Entity\Territoire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Territoire>
 *
 * @method Territoire|null find($id, $lockMode = null, $lockVersion = null)
 * @method Territoire|null findOneBy(array $criteria, array $orderBy = null)
 * @method Territoire[]    findAll()
 * @method Territoire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TerritoireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Territoire::class);
    }

//    /**
//     * @return Territoire[] Returns an array of Territoire objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Territoire
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
