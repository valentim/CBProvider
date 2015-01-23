<?php

namespace CricketBrasil\SearchBundle\Entity\SearchRepository;

use FOS\ElasticaBundle\Repository;
use CricketBrasil\SearchBundle\Model\ProviderSearch;

class ProviderRepository extends Repository
{
    public function search(ProviderSearch $providerSearch)
    {
        // we create a query to return all the articles
        // but if the criteria title is specified, we use it
        if ($providerSearch->getName() != null && $providerSearch != '') {
            $query = new \Elastica\Query\Match();
            $query->setFieldQuery('provider.name', $providerSearch->getName());
            $query->setFieldFuzziness('provider.name', 0.7);
            $query->setFieldMinimumShouldMatch('provider.name', '80%');
            //
        } else {
            $query = new \Elastica\Query\MatchAll();
        }
         $baseQuery = $query;

        // then we create filters depending on the chosen criterias
        $boolFilter = new \Elastica\Filter\Bool();

        /*
            Dates filter
            We add this filter only the getIspublished filter is not at "false"
        */
        if(null !== $providerSearch->getDateFrom()
           && null !== $providerSearch->getDateTo())
        {
            $boolFilter->addMust(new \Elastica\Filter\Range('createdAt',
                array(
                    'gte' => \Elastica\Util::convertDate($providerSearch->getDateFrom()->getTimestamp()),
                    'lte' => \Elastica\Util::convertDate($providerSearch->getDateTo()->getTimestamp())
                )
            ));
        }

    
        $filtered = new \Elastica\Query\Filtered($baseQuery, $boolFilter);

        $query = \Elastica\Query::create($filtered);

        return $this->find($query);
    }

}