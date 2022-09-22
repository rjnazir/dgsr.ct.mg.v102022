<?php

/* @Admin/CtSourceEnergie/add.html.twig */
class __TwigTemplate_7dfc89abf63aedb6783bc439a020a1b772a62e8b57f8b8ea4cdbecd52e06ea6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtSourceEnergie/add.html.twig", 1);
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
        $__internal_6e34087de255337a1c810cfeca9c18e1bf217ec57242cff373b8cf9d1722679b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e34087de255337a1c810cfeca9c18e1bf217ec57242cff373b8cf9d1722679b->enter($__internal_6e34087de255337a1c810cfeca9c18e1bf217ec57242cff373b8cf9d1722679b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtSourceEnergie/add.html.twig"));

        $__internal_39341a6b571e2222de4a3bd4bad4d7c135e570a5cad820edefcc4adc6e5da1e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39341a6b571e2222de4a3bd4bad4d7c135e570a5cad820edefcc4adc6e5da1e3->enter($__internal_39341a6b571e2222de4a3bd4bad4d7c135e570a5cad820edefcc4adc6e5da1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtSourceEnergie/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_energie"] = true;
        // line 8
        $context["menu_energie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e34087de255337a1c810cfeca9c18e1bf217ec57242cff373b8cf9d1722679b->leave($__internal_6e34087de255337a1c810cfeca9c18e1bf217ec57242cff373b8cf9d1722679b_prof);

        
        $__internal_39341a6b571e2222de4a3bd4bad4d7c135e570a5cad820edefcc4adc6e5da1e3->leave($__internal_39341a6b571e2222de4a3bd4bad4d7c135e570a5cad820edefcc4adc6e5da1e3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d39c8e9da6b3694271df08c6ea3c742f7fdd5383fa77ebc02d19423c3a76059 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d39c8e9da6b3694271df08c6ea3c742f7fdd5383fa77ebc02d19423c3a76059->enter($__internal_2d39c8e9da6b3694271df08c6ea3c742f7fdd5383fa77ebc02d19423c3a76059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_804f3560a270826035727585fb4ef4894f940e96b2c327db4b197cb96126811b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_804f3560a270826035727585fb4ef4894f940e96b2c327db4b197cb96126811b->enter($__internal_804f3560a270826035727585fb4ef4894f940e96b2c327db4b197cb96126811b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Catégorie ";
        
        $__internal_804f3560a270826035727585fb4ef4894f940e96b2c327db4b197cb96126811b->leave($__internal_804f3560a270826035727585fb4ef4894f940e96b2c327db4b197cb96126811b_prof);

        
        $__internal_2d39c8e9da6b3694271df08c6ea3c742f7fdd5383fa77ebc02d19423c3a76059->leave($__internal_2d39c8e9da6b3694271df08c6ea3c742f7fdd5383fa77ebc02d19423c3a76059_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b204bce7319a15ddcc94b2e2255be064273246d604550ffc52b76590e751348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b204bce7319a15ddcc94b2e2255be064273246d604550ffc52b76590e751348->enter($__internal_7b204bce7319a15ddcc94b2e2255be064273246d604550ffc52b76590e751348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1130cdaf94922258465523718f7da8337565a65db12cda654427a6b7dd75ace1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1130cdaf94922258465523718f7da8337565a65db12cda654427a6b7dd75ace1->enter($__internal_1130cdaf94922258465523718f7da8337565a65db12cda654427a6b7dd75ace1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"callout callout-success\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer une energie</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sreLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_energie\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("energie_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_1130cdaf94922258465523718f7da8337565a65db12cda654427a6b7dd75ace1->leave($__internal_1130cdaf94922258465523718f7da8337565a65db12cda654427a6b7dd75ace1_prof);

        
        $__internal_7b204bce7319a15ddcc94b2e2255be064273246d604550ffc52b76590e751348->leave($__internal_7b204bce7319a15ddcc94b2e2255be064273246d604550ffc52b76590e751348_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtSourceEnergie/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 41,  133 => 36,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Ajout Catégorie {% endblock %}

{% set menu_energie        = true %}
{% set menu_energie_create = true %}

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
                        <h3 class=\"box-title\">Créer une energie</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.sreLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_energie\"/>
                        <a href=\"{{ path('energie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtSourceEnergie/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtSourceEnergie\\add.html.twig");
    }
}
