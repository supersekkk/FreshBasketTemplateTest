<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Format;
use AmpProject\Html\Attribute;
use AmpProject\Html\Tag as Element;
use AmpProject\Validator\Spec\Identifiable;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

/**
 * Tag class MetaNameAmpListLoadMore.
 *
 * @package ampproject/amp-toolbox.
 *
 * @property-read string $tagName
 * @property-read string $specName
 * @property-read string $mandatoryParent
 * @property-read array $attrs
 * @property-read array<string> $htmlFormat
 */
final class MetaNameAmpListLoadMore extends Tag implements Identifiable
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'meta name=amp-list-load-more';

    /**
     * Array of spec rules.
     *
     * @var array
     */
    const SPEC = [
        SpecRule::TAG_NAME => Element::META,
        SpecRule::SPEC_NAME => 'meta name=amp-list-load-more',
        SpecRule::MANDATORY_PARENT => Element::HEAD,
        SpecRule::ATTRS => [
            Attribute::CONTENT => [
                SpecRule::MANDATORY => true,
            ],
            Attribute::NAME => [
                SpecRule::MANDATORY => true,
                SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                SpecRule::VALUE_CASEI => [
                    'amp-list-load-more',
                ],
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
    ];
}
