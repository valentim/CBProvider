<?php

/* BraincraftedBootstrapBundle:Menu:bootstrap.html.twig */
class __TwigTemplate_a36677b1b95a760703826014ced49dc21f948ae4ffec01f49395661a2e796603 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("knp_menu_base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'dropdownList' => array($this, 'block_dropdownList'),
            'listList' => array($this, 'block_listList'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'dropdownElement' => array($this, 'block_dropdownElement'),
            'dividerElement' => array($this, 'block_dividerElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        // line 22
        $context["options"] = twig_array_merge($this->getContext($context, "options"), array("currentDepth" => 0));
        // line 23
        if ((($this->getAttribute($this->getContext($context, "options", true), "style", array(), "any", true, true) && $this->getAttribute($this->getContext($context, "options", true), "currentClass", array(), "any", true, true)) && ($this->getAttribute($this->getContext($context, "options"), "currentClass", array()) == "current"))) {
            // line 24
            echo "    ";
            $context["options"] = twig_array_merge($this->getContext($context, "options"), array("currentClass" => "active"));
            // line 25
            echo "    ";
            $context["options"] = twig_array_merge($this->getContext($context, "options"), array("ancestorClass" => "active"));
        }
        // line 27
        $context["listAttributes"] = $this->getAttribute($this->getContext($context, "item"), "childrenAttributes", array());
        // line 28
        $this->displayBlock("list", $context, $blocks);
    }

    // line 31
    public function block_list($context, array $blocks = array())
    {
        // line 32
        if ((($this->getAttribute($this->getContext($context, "item"), "hasChildren", array()) &&  !($this->getAttribute($this->getContext($context, "options"), "depth", array()) === 0)) && $this->getAttribute($this->getContext($context, "item"), "displayChildren", array()))) {
            // line 33
            echo "    ";
            $context["listAttributes"] = twig_array_merge($this->getContext($context, "listAttributes"), array("class" => trim((($this->getAttribute($this->getContext($context, "listAttributes", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "listAttributes", true), "class", array()), "")) : ("")))));
            // line 34
            echo "
    ";
            // line 35
            $context["listClass"] = "";
            // line 36
            echo "    ";
            if (($this->getAttribute($this->getContext($context, "options", true), "style", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "options"), "style", array()) == "tabs"))) {
                // line 37
                echo "        ";
                $context["listClass"] = "nav-tabs";
                // line 38
                echo "    ";
            } elseif (($this->getAttribute($this->getContext($context, "options", true), "style", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "options"), "style", array()) == "stacked-tabs"))) {
                // line 39
                echo "        ";
                $context["listClass"] = "nav-tabs nav-stacked";
                // line 40
                echo "    ";
            } elseif (($this->getAttribute($this->getContext($context, "options", true), "style", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "options"), "style", array()) == "justified-tabs"))) {
                // line 41
                echo "        ";
                $context["listClass"] = "nav-tabs nav-justified";
                // line 42
                echo "    ";
            } elseif (($this->getAttribute($this->getContext($context, "options", true), "style", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "options"), "style", array()) == "pills"))) {
                // line 43
                echo "        ";
                $context["listClass"] = "nav-pills";
                // line 44
                echo "    ";
            } elseif (($this->getAttribute($this->getContext($context, "options", true), "style", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "options"), "style", array()) == "justified-pills"))) {
                // line 45
                echo "        ";
                $context["listClass"] = "nav-pills nav-justified";
                // line 46
                echo "    ";
            } elseif (($this->getAttribute($this->getContext($context, "options", true), "style", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "options"), "style", array()) == "stacked-pills"))) {
                // line 47
                echo "        ";
                $context["listClass"] = "nav-pills nav-stacked";
                // line 48
                echo "    ";
            } elseif (($this->getAttribute($this->getContext($context, "options", true), "style", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "options"), "style", array()) == "list"))) {
                // line 49
                echo "        ";
                $context["listClass"] = "nav-list";
                // line 50
                echo "    ";
            } elseif (($this->getAttribute($this->getContext($context, "options", true), "style", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "options"), "style", array()) == "navbar"))) {
                // line 51
                echo "        ";
                $context["listClass"] = "navbar-nav";
                // line 52
                echo "    ";
            } elseif (($this->getAttribute($this->getContext($context, "options", true), "style", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "options"), "style", array()) == "navbar-right"))) {
                // line 53
                echo "        ";
                $context["listClass"] = "navbar-nav navbar-right";
                // line 54
                echo "    ";
            }
            // line 55
            echo "
    ";
            // line 56
            if (($this->getAttribute($this->getContext($context, "options", true), "pull", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "options"), "pull", array()) == "right"))) {
                // line 57
                echo "        ";
                $context["listClass"] = trim((((array_key_exists("listClass", $context)) ? (_twig_default_filter($this->getContext($context, "listClass"), "")) : ("")) . " pull-right"));
                // line 58
                echo "    ";
            } elseif (($this->getAttribute($this->getContext($context, "options", true), "pull", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "options"), "pull", array()) == "left"))) {
                // line 59
                echo "        ";
                $context["listClass"] = trim((((array_key_exists("listClass", $context)) ? (_twig_default_filter($this->getContext($context, "listClass"), "")) : ("")) . "pull-left"));
                // line 60
                echo "    ";
            }
            // line 61
            echo "    
    ";
            // line 62
            $context["listClass"] = ((($this->getAttribute($this->getContext($context, "options"), "currentDepth", array()) == 0)) ? (($this->getContext($context, "listClass") . " nav")) : ($this->getContext($context, "listClass")));
            // line 63
            echo "
    ";
            // line 64
            $context["listAttributes"] = twig_array_merge($this->getContext($context, "listAttributes"), array("class" => trim((((($this->getAttribute($this->getContext($context, "listAttributes", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "listAttributes", true), "class", array()), "")) : ("")) . " ") . $this->getContext($context, "listClass")))));
            // line 65
            echo "
    <ul";
            // line 66
            echo $this->getAttribute($this, "attributes", array(0 => $this->getContext($context, "listAttributes")), "method");
            echo ">
        ";
            // line 67
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
    }

    // line 72
    public function block_dropdownList($context, array $blocks = array())
    {
        // line 73
        ob_start();
        // line 74
        echo "    ";
        if ((($this->getAttribute($this->getContext($context, "item"), "hasChildren", array()) &&  !($this->getAttribute($this->getContext($context, "options"), "depth", array()) === 0)) && (( !$this->getAttribute($this->getAttribute($this->getContext($context, "item", true), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "item"), "displayChildren", array()) === true)) || (($this->getAttribute($this->getAttribute($this->getContext($context, "item", true), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getContext($context, "item"), "extras", array()), "dropdown", array()) === true)) && ($this->getAttribute($this->getContext($context, "item"), "displayChildren", array()) === true))))) {
            // line 75
            echo "        ";
            $context["listAttributes"] = twig_array_merge($this->getContext($context, "listAttributes"), array("class" => trim(((($this->getAttribute($this->getContext($context, "listAttributes", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "listAttributes", true), "class", array()), "")) : ("")) . " dropdown-menu"))));
            // line 76
            echo "        <ul";
            echo $this->getAttribute($this, "attributes", array(0 => $this->getContext($context, "listAttributes")), "method");
            echo ">
        ";
            // line 77
            $this->displayBlock("children", $context, $blocks);
            echo "
        </ul>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 83
    public function block_listList($context, array $blocks = array())
    {
        // line 84
        ob_start();
        // line 85
        echo "    ";
        if ((($this->getAttribute($this->getContext($context, "item"), "hasChildren", array()) &&  !($this->getAttribute($this->getContext($context, "options"), "depth", array()) === 0)) && $this->getAttribute($this->getContext($context, "item"), "displayChildren", array()))) {
            // line 86
            echo "        ";
            $this->displayBlock("children", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 91
    public function block_children($context, array $blocks = array())
    {
        // line 93
        $context["currentOptions"] = $this->getContext($context, "options");
        // line 94
        $context["currentItem"] = $this->getContext($context, "item");
        // line 96
        if ( !(null === $this->getAttribute($this->getContext($context, "options"), "depth", array()))) {
            // line 97
            $context["options"] = twig_array_merge($this->getContext($context, "currentOptions"), array("depth" => ($this->getAttribute($this->getContext($context, "currentOptions"), "depth", array()) - 1)));
        }
        // line 99
        $context["options"] = twig_array_merge($this->getContext($context, "options"), array("currentDepth" => ($this->getAttribute($this->getContext($context, "options"), "currentDepth", array()) + 1)));
        // line 100
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "currentItem"), "children", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 101
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        $context["item"] = $this->getContext($context, "currentItem");
        // line 105
        $context["options"] = $this->getContext($context, "currentOptions");
    }

    // line 108
    public function block_item($context, array $blocks = array())
    {
        // line 109
        if ($this->getAttribute($this->getContext($context, "item"), "displayed", array())) {
            // line 111
            $context["classes"] = (( !twig_test_empty($this->getAttribute($this->getContext($context, "item"), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute($this->getContext($context, "item"), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 112
            if (((array_key_exists("matcher", $context) && $this->getAttribute($this->getContext($context, "matcher"), "isCurrent", array(0 => $this->getContext($context, "item")), "method")) || ($this->getAttribute($this->getContext($context, "item", true), "current", array(), "any", true, true) && $this->getAttribute($this->getContext($context, "item"), "current", array())))) {
                // line 113
                $context["classes"] = twig_array_merge($this->getContext($context, "classes"), array(0 => $this->getAttribute($this->getContext($context, "options"), "currentClass", array())));
            } elseif (((array_key_exists("matcher", $context) && $this->getAttribute($this->getContext($context, "matcher"), "isAncestor", array(0 => $this->getContext($context, "item"), 1 => $this->getAttribute($this->getContext($context, "options"), "depth", array())), "method")) || ($this->getAttribute($this->getContext($context, "item", true), "currentAncestor", array(), "any", true, true) && $this->getAttribute($this->getContext($context, "item"), "currentAncestor", array())))) {
                // line 115
                $context["classes"] = twig_array_merge($this->getContext($context, "classes"), array(0 => $this->getAttribute($this->getContext($context, "options"), "ancestorClass", array())));
            }
            // line 117
            if ($this->getAttribute($this->getContext($context, "item"), "actsLikeFirst", array())) {
                // line 118
                $context["classes"] = twig_array_merge($this->getContext($context, "classes"), array(0 => $this->getAttribute($this->getContext($context, "options"), "firstClass", array())));
            }
            // line 120
            if ($this->getAttribute($this->getContext($context, "item"), "actsLikeLast", array())) {
                // line 121
                $context["classes"] = twig_array_merge($this->getContext($context, "classes"), array(0 => $this->getAttribute($this->getContext($context, "options"), "lastClass", array())));
            }
            // line 123
            if (($this->getAttribute($this->getContext($context, "item"), "hasChildren", array()) && (($this->getAttribute($this->getContext($context, "options", true), "style", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "options"), "style", array()) == "list")) ||  !($this->getAttribute($this->getContext($context, "options"), "currentDepth", array()) === 1)))) {
                // line 124
                $context["classes"] = twig_array_merge($this->getContext($context, "classes"), array(0 => "nav-header"));
            } elseif (((($this->getAttribute($this->getContext($context, "item"), "hasChildren", array()) && $this->getAttribute($this->getContext($context, "options", true), "style", array(), "any", true, true)) && twig_in_filter($this->getAttribute($this->getContext($context, "options"), "style", array()), array(0 => "tabs", 1 => "justified-tabs", 2 => "pills", 3 => "justified-pills", 4 => "navbar", 5 => "navbar-right", 6 => "navbar_justified"))) && (( !$this->getAttribute($this->getAttribute($this->getContext($context, "item", true), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "item"), "displayChildren", array()) === true)) || (($this->getAttribute($this->getAttribute($this->getContext($context, "item", true), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getContext($context, "item"), "extras", array()), "dropdown", array()) === true)) && ($this->getAttribute($this->getContext($context, "item"), "displayChildren", array()) === true))))) {
                // line 126
                $context["classes"] = twig_array_merge($this->getContext($context, "classes"), array(0 => "dropdown"));
            }
            // line 129
            $context["attributes"] = $this->getAttribute($this->getContext($context, "item"), "attributes", array());
            // line 131
            if ((((($this->getAttribute($this->getContext($context, "options", true), "style", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "options"), "style", array()) == "navbar")) && $this->getAttribute($this->getContext($context, "attributes", true), "divider", array(), "any", true, true)) &&  !twig_test_empty($this->getAttribute($this->getContext($context, "attributes"), "divider", array()))) && ($this->getAttribute($this->getContext($context, "options"), "currentDepth", array()) === 1))) {
                // line 132
                $context["classes"] = twig_array_merge($this->getContext($context, "classes"), array(0 => "divider-vertical"));
            } elseif (($this->getAttribute($this->getContext($context, "attributes", true), "divider", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getContext($context, "attributes"), "divider", array())))) {
                // line 134
                $context["classes"] = twig_array_merge($this->getContext($context, "classes"), array(0 => "divider"));
            }
            // line 137
            if ( !twig_test_empty($this->getContext($context, "classes"))) {
                // line 138
                $context["attributes"] = twig_array_merge($this->getContext($context, "attributes"), array("class" => twig_join_filter($this->getContext($context, "classes"), " ")));
            }
            // line 141
            echo "    <li";
            echo $this->getAttribute($this, "attributes", array(0 => $this->getContext($context, "attributes")), "method");
            echo ">";
            // line 142
            if (($this->getAttribute($this->getContext($context, "attributes", true), "divider", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getContext($context, "attributes"), "divider", array())))) {
            } elseif ((((($this->getAttribute($this->getContext($context, "item"), "hasChildren", array()) && $this->getAttribute($this->getContext($context, "options", true), "style", array(), "any", true, true)) && twig_in_filter($this->getAttribute($this->getContext($context, "options"), "style", array()), array(0 => "tabs", 1 => "justified-tabs", 2 => "pills", 3 => "justified-pills", 4 => "navbar", 5 => "navbar-right", 6 => "navbar_justified"))) && ($this->getAttribute($this->getContext($context, "options"), "currentDepth", array()) === 1)) && (( !$this->getAttribute($this->getAttribute($this->getContext($context, "item", true), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "item"), "displayChildren", array()) === true)) || (($this->getAttribute($this->getAttribute($this->getContext($context, "item", true), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getContext($context, "item"), "extras", array()), "dropdown", array()) === true)) && ($this->getAttribute($this->getContext($context, "item"), "displayChildren", array()) === true))))) {
                // line 144
                echo "            ";
                $this->displayBlock("dropdownElement", $context, $blocks);
            } elseif ((((($this->getAttribute($this->getContext($context, "item"), "hasChildren", array()) && $this->getAttribute($this->getContext($context, "options", true), "style", array(), "any", true, true)) && twig_in_filter($this->getAttribute($this->getContext($context, "options"), "style", array()), array(0 => "tabs", 1 => "justified-tabs", 2 => "pills", 3 => "justified-pills", 4 => "navbar", 5 => "navbar-right", 6 => "navbar_justified"))) && ($this->getAttribute($this->getContext($context, "options"), "currentDepth", array()) === 1)) && (($this->getAttribute($this->getAttribute($this->getContext($context, "item", true), "extras", array(), "any", false, true), "dropdown", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getContext($context, "item"), "extras", array()), "dropdown", array()) === false)) || $this->getAttribute($this->getContext($context, "item"), "displayChildren", array(0 => false), "method")))) {
                // line 146
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } elseif (( !twig_test_empty($this->getAttribute($this->getContext($context, "item"), "uri", array())) && ((array_key_exists("matcher", $context) &&  !$this->getAttribute($this->getContext($context, "matcher"), "isCurrent", array(0 => $this->getContext($context, "item")), "method")) || $this->getAttribute($this->getContext($context, "options"), "currentAsLink", array())))) {
                // line 148
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } elseif (( !twig_test_empty($this->getAttribute($this->getContext($context, "item"), "uri", array())) && (($this->getAttribute($this->getContext($context, "item", true), "current", array(), "any", true, true) &&  !$this->getAttribute($this->getContext($context, "item"), "current", array())) || $this->getAttribute($this->getContext($context, "options"), "currentAsLink", array())))) {
                // line 150
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 152
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 155
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute($this->getContext($context, "item"), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute($this->getContext($context, "item"), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 156
            $context["childrenClasses"] = twig_array_merge($this->getContext($context, "childrenClasses"), array(0 => ("menu_level_" . $this->getAttribute($this->getContext($context, "item"), "level", array()))));
            // line 157
            $context["listAttributes"] = twig_array_merge($this->getAttribute($this->getContext($context, "item"), "childrenAttributes", array()), array("class" => twig_join_filter($this->getContext($context, "childrenClasses"), " ")));
            // line 158
            if ((($this->getAttribute($this->getContext($context, "item"), "hasChildren", array()) && $this->getAttribute($this->getContext($context, "options", true), "style", array(), "any", true, true)) && (($this->getAttribute($this->getContext($context, "options"), "style", array()) == "list") ||  !($this->getAttribute($this->getContext($context, "options"), "currentDepth", array()) === 1)))) {
                // line 159
                echo "            ";
                $this->displayBlock("listList", $context, $blocks);
            } elseif ((($this->getAttribute($this->getContext($context, "item"), "hasChildren", array()) && $this->getAttribute($this->getContext($context, "options", true), "style", array(), "any", true, true)) && twig_in_filter($this->getAttribute($this->getContext($context, "options"), "style", array()), array(0 => "tabs", 1 => "justified-tabs", 2 => "pills", 3 => "justified-pills", 4 => "navbar", 5 => "navbar-right", 6 => "navbar_justified")))) {
                // line 161
                echo "            ";
                $this->displayBlock("dropdownList", $context, $blocks);
            } else {
                // line 163
                echo "            ";
                $this->displayBlock("list", $context, $blocks);
            }
            // line 165
            echo "    </li>
";
        }
    }

    // line 169
    public function block_linkElement($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "uri", array()), "html", null, true);
        echo "\"";
        echo $this->getAttribute($this, "attributes", array(0 => $this->getAttribute($this->getContext($context, "item"), "linkAttributes", array())), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
    }

    // line 171
    public function block_dropdownElement($context, array $blocks = array())
    {
        // line 172
        ob_start();
        // line 173
        echo "    ";
        $context["labelAttributes"] = $this->getAttribute($this->getContext($context, "item"), "labelAttributes", array());
        // line 174
        echo "    ";
        $context["labelAttributes"] = twig_array_merge($this->getContext($context, "labelAttributes"), array("class" => trim(((($this->getAttribute($this->getContext($context, "labelAttributes", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "labelAttributes", true), "class", array()), "")) : ("")) . " dropdown-toggle"))));
        // line 175
        echo "    ";
        $context["labelAttributes"] = twig_array_merge($this->getContext($context, "labelAttributes"), array("data-toggle" => "dropdown"));
        // line 176
        echo "    <a href=\"#\"";
        echo $this->getAttribute($this, "attributes", array(0 => $this->getContext($context, "labelAttributes")), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo " <b class=\"caret\"></b></a>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 180
    public function block_dividerElement($context, array $blocks = array())
    {
        // line 181
        ob_start();
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 185
    public function block_spanElement($context, array $blocks = array())
    {
        echo "<span";
        echo $this->getAttribute($this, "attributes", array(0 => $this->getAttribute($this->getContext($context, "item"), "labelAttributes", array())), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
    }

    // line 187
    public function block_label($context, array $blocks = array())
    {
        if (($this->getAttribute($this->getContext($context, "options"), "allow_safe_labels", array()) && $this->getAttribute($this->getContext($context, "item"), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->parseIconsFilter($this->getAttribute($this->getContext($context, "item"), "label", array()));
        } else {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->parseIconsFilter(twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "label", array()), "html", null, true));
        }
    }

    // line 3
    public function getattributes($__attributes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attributes"));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "BraincraftedBootstrapBundle:Menu:bootstrap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  469 => 6,  467 => 5,  463 => 4,  452 => 3,  442 => 187,  432 => 185,  427 => 181,  424 => 180,  414 => 176,  411 => 175,  408 => 174,  405 => 173,  403 => 172,  400 => 171,  388 => 169,  382 => 165,  378 => 163,  374 => 161,  370 => 159,  368 => 158,  366 => 157,  364 => 156,  362 => 155,  358 => 152,  354 => 150,  350 => 148,  346 => 146,  342 => 144,  339 => 142,  335 => 141,  332 => 138,  330 => 137,  327 => 134,  324 => 132,  322 => 131,  320 => 129,  317 => 126,  314 => 124,  312 => 123,  309 => 121,  307 => 120,  304 => 118,  302 => 117,  299 => 115,  296 => 113,  294 => 112,  292 => 111,  290 => 109,  287 => 108,  283 => 105,  281 => 104,  264 => 101,  247 => 100,  245 => 99,  242 => 97,  240 => 96,  238 => 94,  236 => 93,  233 => 91,  224 => 86,  221 => 85,  219 => 84,  216 => 83,  207 => 77,  202 => 76,  199 => 75,  196 => 74,  194 => 73,  191 => 72,  183 => 67,  179 => 66,  176 => 65,  174 => 64,  171 => 63,  169 => 62,  166 => 61,  163 => 60,  160 => 59,  157 => 58,  154 => 57,  152 => 56,  149 => 55,  146 => 54,  143 => 53,  140 => 52,  137 => 51,  134 => 50,  131 => 49,  128 => 48,  125 => 47,  122 => 46,  119 => 45,  116 => 44,  113 => 43,  110 => 42,  107 => 41,  104 => 40,  101 => 39,  98 => 38,  95 => 37,  92 => 36,  90 => 35,  87 => 34,  84 => 33,  82 => 32,  79 => 31,  75 => 28,  73 => 27,  69 => 25,  66 => 24,  64 => 23,  62 => 22,  59 => 17,  52 => 13,  50 => 12,  47 => 11,  11 => 1,);
    }
}
