<?php

/* AdminBundle:CtVisiteExtra:add.html.twig */
class __TwigTemplate_c51ff60d88b2e74beb6136ec0e775c8ca503b507cfedab25ae322e7786c3fe69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtVisiteExtra:add.html.twig", 1);
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
        $__internal_a01be4757a820a35bae4084fca87495837e26a1312e9e04afe86c2df70b066cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a01be4757a820a35bae4084fca87495837e26a1312e9e04afe86c2df70b066cc->enter($__internal_a01be4757a820a35bae4084fca87495837e26a1312e9e04afe86c2df70b066cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtVisiteExtra:add.html.twig"));

        $__internal_e080ac0a7608a0be76cfa990dc5307ab1f18f8462225652d99d78d6993592a77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e080ac0a7608a0be76cfa990dc5307ab1f18f8462225652d99d78d6993592a77->enter($__internal_e080ac0a7608a0be76cfa990dc5307ab1f18f8462225652d99d78d6993592a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtVisiteExtra:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_visite_extra"] = true;
        // line 8
        $context["menu_visite_extra_type"] = true;
        // line 9
        $context["menu_visite_extra_type_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a01be4757a820a35bae4084fca87495837e26a1312e9e04afe86c2df70b066cc->leave($__internal_a01be4757a820a35bae4084fca87495837e26a1312e9e04afe86c2df70b066cc_prof);

        
        $__internal_e080ac0a7608a0be76cfa990dc5307ab1f18f8462225652d99d78d6993592a77->leave($__internal_e080ac0a7608a0be76cfa990dc5307ab1f18f8462225652d99d78d6993592a77_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a4099466e639d943c7b67d98a1fc9e15f40209253365e220ad17e3cea1365c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a4099466e639d943c7b67d98a1fc9e15f40209253365e220ad17e3cea1365c5->enter($__internal_5a4099466e639d943c7b67d98a1fc9e15f40209253365e220ad17e3cea1365c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_874213e3d020d6710e6bb562ba5a1c9423366d19c1b0a5db344a17f76337c329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_874213e3d020d6710e6bb562ba5a1c9423366d19c1b0a5db344a17f76337c329->enter($__internal_874213e3d020d6710e6bb562ba5a1c9423366d19c1b0a5db344a17f76337c329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout visite_extra ";
        
        $__internal_874213e3d020d6710e6bb562ba5a1c9423366d19c1b0a5db344a17f76337c329->leave($__internal_874213e3d020d6710e6bb562ba5a1c9423366d19c1b0a5db344a17f76337c329_prof);

        
        $__internal_5a4099466e639d943c7b67d98a1fc9e15f40209253365e220ad17e3cea1365c5->leave($__internal_5a4099466e639d943c7b67d98a1fc9e15f40209253365e220ad17e3cea1365c5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e743dbcdf5a0b6ff647f14c407cfe78c5ad727c947ea6c7e3e72c87476abb89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e743dbcdf5a0b6ff647f14c407cfe78c5ad727c947ea6c7e3e72c87476abb89->enter($__internal_4e743dbcdf5a0b6ff647f14c407cfe78c5ad727c947ea6c7e3e72c87476abb89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a28848deb9ea9f6bdbca282ed8eeb203340f14c53e0a23a8797e13ada3d2cde6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a28848deb9ea9f6bdbca282ed8eeb203340f14c53e0a23a8797e13ada3d2cde6->enter($__internal_a28848deb9ea9f6bdbca282ed8eeb203340f14c53e0a23a8797e13ada3d2cde6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer une visite extra</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vsteLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_visite_extra\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_extra_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_a28848deb9ea9f6bdbca282ed8eeb203340f14c53e0a23a8797e13ada3d2cde6->leave($__internal_a28848deb9ea9f6bdbca282ed8eeb203340f14c53e0a23a8797e13ada3d2cde6_prof);

        
        $__internal_4e743dbcdf5a0b6ff647f14c407cfe78c5ad727c947ea6c7e3e72c87476abb89->leave($__internal_4e743dbcdf5a0b6ff647f14c407cfe78c5ad727c947ea6c7e3e72c87476abb89_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtVisiteExtra:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  135 => 37,  127 => 32,  118 => 26,  112 => 22,  103 => 19,  100 => 18,  95 => 17,  86 => 14,  83 => 13,  78 => 12,  69 => 11,  50 => 5,  40 => 1,  38 => 9,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Ajout visite_extra {% endblock %}

{% set menu_visite_extra           = true %}
{% set menu_visite_extra_type      = true %}
{% set menu_visite_extra_type_create = true %}

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
                        <h3 class=\"box-title\">Créer une visite extra</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.vsteLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_visite_extra\"/>
                        <a href=\"{{ path('visite_extra_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtVisiteExtra:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtVisiteExtra/add.html.twig");
    }
}
