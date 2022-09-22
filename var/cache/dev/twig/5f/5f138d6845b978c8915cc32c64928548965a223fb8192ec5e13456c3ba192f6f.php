<?php

/* @Admin/CtGenreTarif/add.html.twig */
class __TwigTemplate_3d996e91e552d990937f7815e90f208fc916183b064fdcbef84e3a860d1dd4bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtGenreTarif/add.html.twig", 1);
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
        $__internal_79e3d5218e979e487153ae21cebcc9c6bb16e12179b5c3e3557657f0ab993202 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79e3d5218e979e487153ae21cebcc9c6bb16e12179b5c3e3557657f0ab993202->enter($__internal_79e3d5218e979e487153ae21cebcc9c6bb16e12179b5c3e3557657f0ab993202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtGenreTarif/add.html.twig"));

        $__internal_ca13c1a3c9532f5999e12b0ab3b9bfbd33901cdd54425895d36bead235201c79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca13c1a3c9532f5999e12b0ab3b9bfbd33901cdd54425895d36bead235201c79->enter($__internal_ca13c1a3c9532f5999e12b0ab3b9bfbd33901cdd54425895d36bead235201c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtGenreTarif/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_genre"] = true;
        // line 8
        $context["menu_genre_tarif"] = true;
        // line 9
        $context["menu_genre_tarif_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79e3d5218e979e487153ae21cebcc9c6bb16e12179b5c3e3557657f0ab993202->leave($__internal_79e3d5218e979e487153ae21cebcc9c6bb16e12179b5c3e3557657f0ab993202_prof);

        
        $__internal_ca13c1a3c9532f5999e12b0ab3b9bfbd33901cdd54425895d36bead235201c79->leave($__internal_ca13c1a3c9532f5999e12b0ab3b9bfbd33901cdd54425895d36bead235201c79_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3236e36bc75701d3ebf9b4d5f4394a49e2e576f575ae02516327bae161b651df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3236e36bc75701d3ebf9b4d5f4394a49e2e576f575ae02516327bae161b651df->enter($__internal_3236e36bc75701d3ebf9b4d5f4394a49e2e576f575ae02516327bae161b651df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6d90558c5e03b3f0cc2ba2a6d51ab69c1ad6f7cd0500a3ee4f6dd73a5c05cf40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d90558c5e03b3f0cc2ba2a6d51ab69c1ad6f7cd0500a3ee4f6dd73a5c05cf40->enter($__internal_6d90558c5e03b3f0cc2ba2a6d51ab69c1ad6f7cd0500a3ee4f6dd73a5c05cf40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Tarif genre ";
        
        $__internal_6d90558c5e03b3f0cc2ba2a6d51ab69c1ad6f7cd0500a3ee4f6dd73a5c05cf40->leave($__internal_6d90558c5e03b3f0cc2ba2a6d51ab69c1ad6f7cd0500a3ee4f6dd73a5c05cf40_prof);

        
        $__internal_3236e36bc75701d3ebf9b4d5f4394a49e2e576f575ae02516327bae161b651df->leave($__internal_3236e36bc75701d3ebf9b4d5f4394a49e2e576f575ae02516327bae161b651df_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f513bfc10bee9995f7d1f33af01f23aec68a99d7d2673d48be1b6a3d4eb9a0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f513bfc10bee9995f7d1f33af01f23aec68a99d7d2673d48be1b6a3d4eb9a0f->enter($__internal_2f513bfc10bee9995f7d1f33af01f23aec68a99d7d2673d48be1b6a3d4eb9a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_512befb0b1ef5743a64fb35391d49e63c237d058c128775e2e8946b500a9a1db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_512befb0b1ef5743a64fb35391d49e63c237d058c128775e2e8946b500a9a1db->enter($__internal_512befb0b1ef5743a64fb35391d49e63c237d058c128775e2e8946b500a9a1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 19
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 20
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Ajouter tarif genre</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctGenre", array()), 'row');
        echo "
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "grtPrix", array()), 'row');
        echo "
                        ";
        // line 36
        echo "                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_genre\"/>
                        <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_512befb0b1ef5743a64fb35391d49e63c237d058c128775e2e8946b500a9a1db->leave($__internal_512befb0b1ef5743a64fb35391d49e63c237d058c128775e2e8946b500a9a1db_prof);

        
        $__internal_2f513bfc10bee9995f7d1f33af01f23aec68a99d7d2673d48be1b6a3d4eb9a0f->leave($__internal_2f513bfc10bee9995f7d1f33af01f23aec68a99d7d2673d48be1b6a3d4eb9a0f_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtGenreTarif/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 45,  143 => 40,  137 => 36,  133 => 34,  129 => 33,  120 => 27,  114 => 23,  105 => 20,  102 => 19,  98 => 18,  95 => 17,  86 => 14,  83 => 13,  78 => 12,  69 => 11,  50 => 5,  40 => 1,  38 => 9,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Ajout Tarif genre {% endblock %}

{% set menu_genre               = true %}
{% set menu_genre_tarif          = true %}
{% set menu_genre_tarif_create   = true %}

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
                        <h3 class=\"box-title\">Ajouter tarif genre</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.ctGenre) }}
                        {{ form_row(form.grtPrix) }}
                        {#{{ form_row(form.grtAnnee) }}#}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_genre\"/>
                        <a href=\"{{ path('genre_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtGenreTarif/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtGenreTarif\\add.html.twig");
    }
}
