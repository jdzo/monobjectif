<?php

namespace AppBundle\Repository;
use Doctrine\ORM\EntityRepository;
/**
* ObjectifRepository
*
* This class was generated by the Doctrine ORM. Add your own custom
* repository methods below.
*/
class ObjectifRepository extends \Doctrine\ORM\EntityRepository
{
    public function myFindAll(){
        // Méthode 2 : en passant par le raccourci (je recommande)

        $queryBuilder = $this->createQueryBuilder('a');
        // On n'ajoute pas de critère ou tri particulier, la construction
        // de notre requête est finie
        // On récupère la Query à partir du QueryBuilder
        $query = $queryBuilder->getQuery();
        // On récupère les résultats à partir de la Query
        $results = $query->getResult();
        // On retourne ces résultats
        return $results;
    } 
    public function myFindOne($id){
        // Méthode 2 : en passant par le raccourci (je recommande)

        $queryBuilder = $this->createQueryBuilder('a');
        $queryBuilder   
        ->where('a.id = :id')   
        ->setParameter('id', $id);


        return $queryBuilder    
        ->getQuery() 
        ->getOneOrNullResult()   ;  
    }
    
    public function MyObjectif(QueryBuilder $qb){
      $qb

      ->andWhere('a.owner=:owner')
      ->setParameter('owner', '') ; //ME
    
    }
}
