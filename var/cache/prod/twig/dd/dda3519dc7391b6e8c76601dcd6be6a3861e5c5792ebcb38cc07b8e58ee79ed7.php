<?php

/* @Admin/CtImprimeTechUse/edit.html.twig */
class __TwigTemplate_a6678cefebf91447abd04d188589dd7eef8ab1f10667f962ef12a3e5b5648316 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtImprimeTechUse/edit.html.twig", 1);
        $this->blocks = array(
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? null), array(0 => ":form:custom_fields.html.twig"));
        // line 5
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? null), "ctBordereau", array()), array(0 => $this));
        // line 6
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? null), "ctCentre", array()), array(0 => $this));
        // line 7
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? null), "ctImprimeTech", array()), array(0 => $this));
        // line 8
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? null), "ituMotifUsed", array()), array(0 => $this));
        // line 37
        $context["menu_imprime_tech_use"] = true;
        // line 38
        $context["menu_imprime_tech_use_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 11
        if ((((($context["required"] ?? null) && (null === ($context["placeholder"] ?? null))) &&  !($context["placeholder_in_choices"] ?? null)) &&  !($context["multiple"] ?? null))) {
            // line 12
            $context["required"] = false;
        }
        // line 14
        echo "<span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                ";
        // line 16
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? null)) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 17
        if ( !(null === ($context["placeholder"] ?? null))) {
            // line 18
            echo "<option value=\"\"";
            if ((($context["required"] ?? null) && twig_test_empty(($context["value"] ?? null)))) {
                echo " selected=\"selected\"";
            }
            echo ">
                    ";
            // line 19
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? null) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? null), array(), ($context["translation_domain"] ?? null))) : ("")), "html", null, true);
            echo "
                </option>";
        }
        // line 22
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? null)) > 0)) {
            // line 23
            $context["options"] = ($context["preferred_choices"] ?? null);
            // line 24
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 25
            if (((twig_length_filter($this->env, ($context["choices"] ?? null)) > 0) &&  !(null === ($context["separator"] ?? null)))) {
                // line 26
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? null), "html", null, true);
                echo "</option>";
            }
        }
        // line 29
        $context["options"] = ($context["choices"] ?? null);
        // line 30
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 31
        echo "</select>
    </span>";
    }

    // line 35
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification utilisation imprimé technique ";
    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 42
            echo "        <div class=\"callout callout-success\">
            ";
            // line 43
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 47
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 48
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Modifier une utilisation d'imprimé technique</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "ctBordereau", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "ctCentre", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "ctImprimeTech", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "ituNumero", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "ituMotifUsed", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "ctControle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <div class=\"row\">
                            <div class=\"col-xs-12\" >
                                <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_it_in_bl\"/>
                            </div>
                        </div>
                        <br/>
                        <div class=\"row\">
                            <div class=\"col-xs-12\" >
                                <a href=\"";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_use_index");
        echo "\" class=\"btn btn-light\" >
                                    Retour à la liste
                                </a>

                                <a href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_use_search");
        echo "\" class=\"btn btn-default\" >
                                    Retour à la rechercher
                                </a>

                                <a href=\"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_use_new");
        echo "\" class=\"btn btn-info\" >
                                    Retour à l'ajout multiple
                                </a>
                            </div>
                        </div>
                    </div>
                ";
        // line 107
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 113
    public function block_javascripts($context, array $blocks = array())
    {
        // line 114
        echo "
    <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.js"), "html", null, true);
        echo "\" ></script>
    <script type=\"text/javascript\">
        ";
        // line 117
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

        var _check_ct_controle_ids_ajax_uri = \"";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprimes_tech_test_ct_controle_ajax");
        echo "\";

    </script>
    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/imprime.tech.use.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "@Admin/CtImprimeTechUse/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 122,  258 => 119,  253 => 117,  248 => 115,  245 => 114,  242 => 113,  233 => 107,  224 => 101,  217 => 97,  210 => 93,  195 => 81,  188 => 77,  181 => 73,  174 => 69,  167 => 65,  160 => 61,  151 => 55,  145 => 51,  136 => 48,  133 => 47,  128 => 46,  119 => 43,  116 => 42,  111 => 41,  108 => 40,  101 => 35,  96 => 31,  94 => 30,  92 => 29,  86 => 26,  84 => 25,  82 => 24,  80 => 23,  78 => 22,  73 => 19,  66 => 18,  64 => 17,  58 => 16,  54 => 14,  51 => 12,  49 => 11,  46 => 10,  42 => 1,  40 => 38,  38 => 37,  36 => 8,  34 => 7,  32 => 6,  30 => 5,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Admin/CtImprimeTechUse/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtImprimeTechUse\\edit.html.twig");
    }
}
