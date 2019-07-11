<?php declare(strict_types = 1);

namespace App\Entity\LHEO\XMLStructure;

/**
 * Class XMLElement
 *
 * @package App\Entity\LHEO\XMLStructure
 */
abstract class XMLElement
{
    /**
     * The name of the XML element to generate
     * @var string
     */
    protected $name;
    /** @var string|null */
    protected $numero;
    /** @var string|null */
    protected $info;
    /** @var string|null */
    protected $ref;
    /** @var string|null */
    protected $id;
    /** @var string|null */
    protected $idref;
    /** @var string|null */
    protected $tag;

    /**
     * XMLElement constructor.
     * @param string $name
     * @param string|null $numero
     * @param string|null $info
     * @param string|null $ref
     * @param string|null $id
     * @param string|null $idref
     * @param string|null $tag
     */
    public function __construct(
        string $name,
        string $numero = null,
        string $info = null,
        string $ref = null,
        string $id = null,
        string $idref = null,
        string $tag = null
    ) {
        $this->name = $name;
        $this->numero = $numero;
        $this->info = $info;
        $this->ref = $ref;
        $this->id = $id;
        $this->idref = $idref;
        $this->tag = $tag;
    }

    /**
     * @return array
     */
    private function getAttributes(): array
    {
        return [
            'numero'    => $this->numero,
            'info'      => $this->info,
            'ref'       => $this->ref,
            'id'        => $this->id,
            'idref'     => $this->idref,
            'tag'       => $this->tag,
        ];
    }

    /**
     * Generates an XML Element for the entity
     * @param string $content
     * @return string
     */
    public function toXMLString(string $content): string
    {
        $xml = '<' . $this->name;
        foreach ($this->getAttributes() as $key => $value) {
            if (! is_null($value)) {
                $xml .= ' '. $key . '="'. $value . '"';
            }
        }
        $xml .= '>' . $content . '</'. $this->name .'>';
        return $xml;
    }
}
