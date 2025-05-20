<?php

namespace App\Repository;

use App\Entity\Language;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Language>
 *
 * @method Language|null find($id, $lockMode = null, $lockVersion = null)
 * @method Language|null findOneBy(array $criteria, array $orderBy = null)
 * @method Language[]    findAll()
 * @method Language[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LanguageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Language::class);
    }

    /**
     * Recherche les langues dont le nom ou la description contient le terme donné.
     *
     * @param string $term Le terme recherché
     * @return Language[]
     */
    public function searchByNameOrDescription(string $term): array
    {
        return $this->createQueryBuilder('l')
            ->where('l.name LIKE :term OR l.description LIKE :term')
            ->setParameter('term', '%' . $term . '%')
            ->orderBy('l.name', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
