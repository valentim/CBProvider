<?php

/* BraincraftedBootstrapBundle:Bootstrap:bootstrap.less.twig */
class __TwigTemplate_efee46256301c55ec6a543d4398acdf9b6e6df453e28e3d0c25674fa77331961 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "/*!
 * Bootstrap v3.0.0
 *
 * Copyright 2013 Twitter, Inc
 * Licensed under the Apache License v2.0
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Designed and built with all the love in the world by @mdo and @fat.
 */

// Core variables and mixins
@import \"";
        // line 12
        echo twig_escape_filter($this->env, $this->getContext($context, "variables_file"), "html", null, true);
        echo "\";
@import \"";
        // line 13
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/mixins.less\";

// Reset
@import \"";
        // line 16
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/normalize.less\";
@import \"";
        // line 17
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/print.less\";

// Core CSS
@import \"";
        // line 20
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/scaffolding.less\";
@import \"";
        // line 21
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/type.less\";
@import \"";
        // line 22
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/code.less\";
@import \"";
        // line 23
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/grid.less\";
@import \"";
        // line 24
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/tables.less\";
@import \"";
        // line 25
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/forms.less\";
@import \"";
        // line 26
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/buttons.less\";

// Components
@import \"";
        // line 29
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/component-animations.less\";
@import \"";
        // line 30
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/glyphicons.less\";
@import \"";
        // line 31
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/dropdowns.less\";
@import \"";
        // line 32
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/button-groups.less\";
@import \"";
        // line 33
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/input-groups.less\";
@import \"";
        // line 34
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/navs.less\";
@import \"";
        // line 35
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/navbar.less\";
@import \"";
        // line 36
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/breadcrumbs.less\";
@import \"";
        // line 37
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/pagination.less\";
@import \"";
        // line 38
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/pager.less\";
@import \"";
        // line 39
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/labels.less\";
@import \"";
        // line 40
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/badges.less\";
@import \"";
        // line 41
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/jumbotron.less\";
@import \"";
        // line 42
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/thumbnails.less\";
@import \"";
        // line 43
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/alerts.less\";
@import \"";
        // line 44
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/progress-bars.less\";
@import \"";
        // line 45
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/media.less\";
@import \"";
        // line 46
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/list-group.less\";
@import \"";
        // line 47
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/panels.less\";
@import \"";
        // line 48
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/wells.less\";
@import \"";
        // line 49
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/close.less\";

// Components w/ JavaScript
@import \"";
        // line 52
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/modals.less\";
@import \"";
        // line 53
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/tooltip.less\";
@import \"";
        // line 54
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/popovers.less\";
@import \"";
        // line 55
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/carousel.less\";

// Utility classes
@import \"";
        // line 58
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/utilities.less\";
@import \"";
        // line 59
        echo twig_escape_filter($this->env, $this->getContext($context, "assets_dir"), "html", null, true);
        echo "less/responsive-utilities.less\";
";
    }

    public function getTemplateName()
    {
        return "BraincraftedBootstrapBundle:Bootstrap:bootstrap.less.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 59,  186 => 58,  180 => 55,  176 => 54,  172 => 53,  168 => 52,  162 => 49,  158 => 48,  154 => 47,  150 => 46,  146 => 45,  142 => 44,  138 => 43,  134 => 42,  130 => 41,  126 => 40,  122 => 39,  118 => 38,  114 => 37,  110 => 36,  106 => 35,  102 => 34,  98 => 33,  94 => 32,  90 => 31,  86 => 30,  82 => 29,  76 => 26,  72 => 25,  68 => 24,  64 => 23,  60 => 22,  56 => 21,  52 => 20,  46 => 17,  42 => 16,  36 => 13,  32 => 12,  19 => 1,);
    }
}
