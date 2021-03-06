<?php

namespace App\Repository;

use App\Entity\Organ;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Organ|null find($id, $lockMode = null, $lockVersion = null)
 * @method Organ|null findOneBy(array $criteria, array $orderBy = null)

 * @method Organ[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrganRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Organ::class);
    }

//    /**
//     * @return Organ[] Returns an array of Organ objects
//     */

    public function findAll()
    {
        return $this->createQueryBuilder('o')
            ->orderBy('o.price', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();
    }




    /*public function findOneBySomeField($value): ?Organ
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
