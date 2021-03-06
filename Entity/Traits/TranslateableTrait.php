<?php

namespace Ojs\EndorsementBundle\Entity\Traits;

trait TranslateableTrait
{
    /**
     * @var
     */
    protected $currentTranslation;

    /**
     * @Prezent\CurrentLocale
     * @GRID\Column(title="currentLocale")
     */
    protected $currentLocale;

    /**
     * @var string
     */
    protected $defaultLocale;

    /**
     * @return mixed
     */
    public function getCurrentLocale()
    {
        return $this->currentLocale;
    }

    /**
     * @param mixed $currentLocale
     */
    public function setCurrentLocale($currentLocale)
    {
        $this->currentLocale = $currentLocale;
    }

    /**
     * @return mixed
     */
    public function getDefaultLocale()
    {
        return $this->defaultLocale;
    }

    /**
     * @param mixed $defaultLocale
     */
    public function setDefaultLocale($defaultLocale)
    {
        $this->defaultLocale = $defaultLocale;
    }

    /**
     * Returns translation of given locale
     * @param null $locale
     * @return mixed
     */
    public function getTranslationByLocale($locale = null)
    {
        if(null === $locale){
            throw new \RuntimeException('please support an locale');
        }
        foreach($this->translations as $translation){
            $translations[$translation->getLocale()] = $translation;
        }
        return $translations[$locale];
    }
}
