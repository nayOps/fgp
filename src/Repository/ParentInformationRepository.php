<?php

namespace App\Repository;

use App\Entity\ParentInformation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ParentInformation>
 *
 * @method ParentInformation|null find($id, $lockMode = null, $lockVersion = null)
 * @method ParentInformation|null findOneBy(array $criteria, array $orderBy = null)
 * @method ParentInformation[]    findAll()
 * @method ParentInformation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ParentInformationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ParentInformation::class);
    }

//    /**
//     * @return ParentInformation[] Returns an array of ParentInformation objects
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

//    public function findOneBySomeField($value): ?ParentInformation
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
