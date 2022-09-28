<?php

/* @Admin/CtTypeVisite/add.html.twig */
class __TwigTemplate_c8520be7110dc809b32b69bc0c13cfb1bc0692cde24cdbd099b305a9c6e9d00b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtTypeVisite/add.html.twig", 1);
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
        $__internal_fefb2b41ae5941aaac2c72266acefbecc72126ecb443ffa49a10fb91b8d8f344 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fefb2b41ae5941aaac2c72266acefbecc72126ecb443ffa49a10fb91b8d8f344->enter($__internal_fefb2b41ae5941aaac2c72266acefbecc72126ecb443ffa49a10fb91b8d8f344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeVisite/add.html.twig"));

        $__internal_cde7f620a2abf4a0ba877d01a21071ce52026488e17c87a45184fc04d688b14f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde7f620a2abf4a0ba877d01a21071ce52026488e17c87a45184fc04d688b14f->enter($__internal_cde7f620a2abf4a0ba877d01a21071ce52026488e17c87a45184fc04d688b14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeVisite/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_visite"] = true;
        // line 8
        $context["menu_type_visite"] = true;
        // line 9
        $context["menu_type_visite_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fefb2b41ae5941aaac2c72266acefbecc72126ecb443ffa49a10fb91b8d8f344->leave($__internal_fefb2b41ae5941aaac2c72266acefbecc72126ecb443ffa49a10fb91b8d8f344_prof);

        
        $__internal_cde7f620a2abf4a0ba877d01a21071ce52026488e17c87a45184fc04d688b14f->leave($__internal_cde7f620a2abf4a0ba877d01a21071ce52026488e17c87a45184fc04d688b14f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_df74bec8d426a99897e1df5d3a195a623d6e36c8f95622d095e7fe4a8499681d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df74bec8d426a99897e1df5d3a195a623d6e36c8f95622d095e7fe4a8499681d->enter($__internal_df74bec8d426a99897e1df5d3a195a623d6e36c8f95622d095e7fe4a8499681d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_50bdf949118b148f51036a04a2736576e86c4d427251c0fdd432828d41f3ecce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50bdf949118b148f51036a04a2736576e86c4d427251c0fdd432828d41f3ecce->enter($__internal_50bdf949118b148f51036a04a2736576e86c4d427251c0fdd432828d41f3ecce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Type de visite ";
        
        $__internal_50bdf949118b148f51036a04a2736576e86c4d427251c0fdd432828d41f3ecce->leave($__internal_50bdf949118b148f51036a04a2736576e86c4d427251c0fdd432828d41f3ecce_prof);

        
        $__internal_df74bec8d426a99897e1df5d3a195a623d6e36c8f95622d095e7fe4a8499681d->leave($__internal_df74bec8d426a99897e1df5d3a195a623d6e36c8f95622d095e7fe4a8499681d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4d2c9e1dd7127cde47b671557f008cacd5cc436608079a7a9e4921b57e96c66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4d2c9e1dd7127cde47b671557f008cacd5cc436608079a7a9e4921b57e96c66->enter($__internal_a4d2c9e1dd7127cde47b671557f008cacd5cc436608079a7a9e4921b57e96c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7467f27a1a232dc01d8d7c21cf84af09aac09ff120f8b6ab5c2d3a6f7244c1b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7467f27a1a232dc01d8d7c21cf84af09aac09ff120f8b6ab5c2d3a6f7244c1b3->enter($__internal_7467f27a1a232dc01d8d7c21cf84af09aac09ff120f8b6ab5c2d3a6f7244c1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer un type de visite</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tpvLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_visite\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_visite_index");
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
        
        $__internal_7467f27a1a232dc01d8d7c21cf84af09aac09ff120f8b6ab5c2d3a6f7244c1b3->leave($__internal_7467f27a1a232dc01d8d7c21cf84af09aac09ff120f8b6ab5c2d3a6f7244c1b3_prof);

        
        $__internal_a4d2c9e1dd7127cde47b671557f008cacd5cc436608079a7a9e4921b57e96c66->leave($__internal_a4d2c9e1dd7127cde47b671557f008cacd5cc436608079a7a9e4921b57e96c66_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtTypeVisite/add.html.twig";
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

{% block title %}{{ parent() }} Ajout Type de visite {% endblock %}

{% set menu_visite             = true %}
{% set menu_type_visite        = true %}
{% set menu_type_visite_create = true %}

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
                        <h3 class=\"box-title\">Créer un type de visite</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.tpvLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_visite\"/>
                        <a href=\"{{ path('type_visite_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtTypeVisite/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtTypeVisite\\add.html.twig");
    }
}
