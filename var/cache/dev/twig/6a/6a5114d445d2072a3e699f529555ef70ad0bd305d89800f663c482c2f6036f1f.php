<?php

/* @Admin/CtTypeReception/add.html.twig */
class __TwigTemplate_a7645f88ac5115c78ac63a3f4a397905e6be30825eb26f15ab59cb3690326e06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtTypeReception/add.html.twig", 1);
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
        $__internal_6810545dd82fe2b9af5c3d8c940661086b2b26c801392a2787c4cd131c78641d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6810545dd82fe2b9af5c3d8c940661086b2b26c801392a2787c4cd131c78641d->enter($__internal_6810545dd82fe2b9af5c3d8c940661086b2b26c801392a2787c4cd131c78641d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeReception/add.html.twig"));

        $__internal_c1b21ee02cb6415edacd29391bc697af81888002da6ae51f637ff629464e3d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1b21ee02cb6415edacd29391bc697af81888002da6ae51f637ff629464e3d1c->enter($__internal_c1b21ee02cb6415edacd29391bc697af81888002da6ae51f637ff629464e3d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeReception/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_reception"] = true;
        // line 8
        $context["menu_type_reception"] = true;
        // line 9
        $context["menu_type_reception_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6810545dd82fe2b9af5c3d8c940661086b2b26c801392a2787c4cd131c78641d->leave($__internal_6810545dd82fe2b9af5c3d8c940661086b2b26c801392a2787c4cd131c78641d_prof);

        
        $__internal_c1b21ee02cb6415edacd29391bc697af81888002da6ae51f637ff629464e3d1c->leave($__internal_c1b21ee02cb6415edacd29391bc697af81888002da6ae51f637ff629464e3d1c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a613d12d8fca8d9a8e42b597bd36f7a26dd32d0b0c427766a433d56b481836e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a613d12d8fca8d9a8e42b597bd36f7a26dd32d0b0c427766a433d56b481836e3->enter($__internal_a613d12d8fca8d9a8e42b597bd36f7a26dd32d0b0c427766a433d56b481836e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_048e4a39559a55982257b0420c27a2d44d4ad5ad356b7b70d3fdd80790e648ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_048e4a39559a55982257b0420c27a2d44d4ad5ad356b7b70d3fdd80790e648ba->enter($__internal_048e4a39559a55982257b0420c27a2d44d4ad5ad356b7b70d3fdd80790e648ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Type de réception ";
        
        $__internal_048e4a39559a55982257b0420c27a2d44d4ad5ad356b7b70d3fdd80790e648ba->leave($__internal_048e4a39559a55982257b0420c27a2d44d4ad5ad356b7b70d3fdd80790e648ba_prof);

        
        $__internal_a613d12d8fca8d9a8e42b597bd36f7a26dd32d0b0c427766a433d56b481836e3->leave($__internal_a613d12d8fca8d9a8e42b597bd36f7a26dd32d0b0c427766a433d56b481836e3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_19273f6d559ee56df327de060ad258c4733c8f79c42d1413066c364c618ff723 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19273f6d559ee56df327de060ad258c4733c8f79c42d1413066c364c618ff723->enter($__internal_19273f6d559ee56df327de060ad258c4733c8f79c42d1413066c364c618ff723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2679117248e30db3e6ad80c82664e69c1e087bf70a7d7bf71d285324a8b407aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2679117248e30db3e6ad80c82664e69c1e087bf70a7d7bf71d285324a8b407aa->enter($__internal_2679117248e30db3e6ad80c82664e69c1e087bf70a7d7bf71d285324a8b407aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer un type de réception</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tprcpLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_reception\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_reception_index");
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
        
        $__internal_2679117248e30db3e6ad80c82664e69c1e087bf70a7d7bf71d285324a8b407aa->leave($__internal_2679117248e30db3e6ad80c82664e69c1e087bf70a7d7bf71d285324a8b407aa_prof);

        
        $__internal_19273f6d559ee56df327de060ad258c4733c8f79c42d1413066c364c618ff723->leave($__internal_19273f6d559ee56df327de060ad258c4733c8f79c42d1413066c364c618ff723_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtTypeReception/add.html.twig";
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

{% block title %}{{ parent() }} Ajout Type de réception {% endblock %}

{% set menu_reception        = true %}
{% set menu_type_reception        = true %}
{% set menu_type_reception_create = true %}

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
                        <h3 class=\"box-title\">Créer un type de réception</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.tprcpLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_reception\"/>
                        <a href=\"{{ path('type_reception_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtTypeReception/add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtTypeReception\\add.html.twig");
    }
}
