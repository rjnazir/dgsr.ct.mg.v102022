<?php

/* @Admin/CtVisiteExtraTarif/add.html.twig */
class __TwigTemplate_f739f24bc53f57fc8ed5640d7e6a29df48a1104017cd677630e47f5eae3ae978 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtVisiteExtraTarif/add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd403a77ac9f4fb4f22bc80f49a555449acb1bbd26f7ff05285078a1c33760c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd403a77ac9f4fb4f22bc80f49a555449acb1bbd26f7ff05285078a1c33760c5->enter($__internal_bd403a77ac9f4fb4f22bc80f49a555449acb1bbd26f7ff05285078a1c33760c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtVisiteExtraTarif/add.html.twig"));

        $__internal_c2aabbb3eaa0baf916db3acd6c004306e9f3d8f835dd989540dc1ee5808ea2f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2aabbb3eaa0baf916db3acd6c004306e9f3d8f835dd989540dc1ee5808ea2f5->enter($__internal_c2aabbb3eaa0baf916db3acd6c004306e9f3d8f835dd989540dc1ee5808ea2f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtVisiteExtraTarif/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_visite_extra"] = true;
        // line 8
        $context["menu_visite_extra_tarif"] = true;
        // line 9
        $context["menu_visite_extra_tarif_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd403a77ac9f4fb4f22bc80f49a555449acb1bbd26f7ff05285078a1c33760c5->leave($__internal_bd403a77ac9f4fb4f22bc80f49a555449acb1bbd26f7ff05285078a1c33760c5_prof);

        
        $__internal_c2aabbb3eaa0baf916db3acd6c004306e9f3d8f835dd989540dc1ee5808ea2f5->leave($__internal_c2aabbb3eaa0baf916db3acd6c004306e9f3d8f835dd989540dc1ee5808ea2f5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_32ed2b2b9e123ab046373aa702477a6822d499bdc4a3700bc119c26ff1292d39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32ed2b2b9e123ab046373aa702477a6822d499bdc4a3700bc119c26ff1292d39->enter($__internal_32ed2b2b9e123ab046373aa702477a6822d499bdc4a3700bc119c26ff1292d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4a737360d73116e081b512892cc6f213dc10e1f5a9102a25e63688abf6b2705a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a737360d73116e081b512892cc6f213dc10e1f5a9102a25e63688abf6b2705a->enter($__internal_4a737360d73116e081b512892cc6f213dc10e1f5a9102a25e63688abf6b2705a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Tarif Visite Extra ";
        
        $__internal_4a737360d73116e081b512892cc6f213dc10e1f5a9102a25e63688abf6b2705a->leave($__internal_4a737360d73116e081b512892cc6f213dc10e1f5a9102a25e63688abf6b2705a_prof);

        
        $__internal_32ed2b2b9e123ab046373aa702477a6822d499bdc4a3700bc119c26ff1292d39->leave($__internal_32ed2b2b9e123ab046373aa702477a6822d499bdc4a3700bc119c26ff1292d39_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_167b9f147b388ecf607fed907dccb1db9fa3bfb2536c1cf1b7c45ccf7e75a5f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_167b9f147b388ecf607fed907dccb1db9fa3bfb2536c1cf1b7c45ccf7e75a5f0->enter($__internal_167b9f147b388ecf607fed907dccb1db9fa3bfb2536c1cf1b7c45ccf7e75a5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cee1a93ac8cc12dd529f79554d89ecc2f50fb62adc5a9e669379b3535aeb5503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cee1a93ac8cc12dd529f79554d89ecc2f50fb62adc5a9e669379b3535aeb5503->enter($__internal_cee1a93ac8cc12dd529f79554d89ecc2f50fb62adc5a9e669379b3535aeb5503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "        <div class=\"callout callout-success\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 19
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Ajouter tarif visite extra</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVisiteExtra", array()), 'row');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vetPrix", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_visite_extra\"/>
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_extra_tarif_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_cee1a93ac8cc12dd529f79554d89ecc2f50fb62adc5a9e669379b3535aeb5503->leave($__internal_cee1a93ac8cc12dd529f79554d89ecc2f50fb62adc5a9e669379b3535aeb5503_prof);

        
        $__internal_167b9f147b388ecf607fed907dccb1db9fa3bfb2536c1cf1b7c45ccf7e75a5f0->leave($__internal_167b9f147b388ecf607fed907dccb1db9fa3bfb2536c1cf1b7c45ccf7e75a5f0_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtVisiteExtraTarif/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 43,  139 => 38,  131 => 33,  127 => 32,  118 => 26,  112 => 22,  103 => 19,  100 => 18,  95 => 17,  86 => 14,  83 => 13,  78 => 12,  69 => 11,  50 => 5,  40 => 1,  38 => 9,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% form_theme form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Ajout Tarif Visite Extra {% endblock %}

{% set menu_visite_extra = true %}
{% set menu_visite_extra_tarif = true %}
{% set menu_visite_extra_tarif_create = true %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                {{ form_start(form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Ajouter tarif visite extra</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.ctVisiteExtra) }}
                        {{ form_row(form.vetPrix) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_visite_extra\"/>
                        <a href=\"{{ path('visite_extra_tarif_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtVisiteExtraTarif/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtVisiteExtraTarif\\add.html.twig");
    }
}
