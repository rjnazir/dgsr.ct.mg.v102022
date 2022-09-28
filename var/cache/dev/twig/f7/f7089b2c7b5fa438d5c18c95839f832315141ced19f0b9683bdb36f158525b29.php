<?php

/* AdminBundle:CtTypeVisite:add.html.twig */
class __TwigTemplate_ff75e73335020577fdddfd0c1b75a0a4d6365dc2660c42f9a892a63b796ef959 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtTypeVisite:add.html.twig", 1);
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
        $__internal_f5c37419b1d12bd65c7f3d84eb6dd09ddced131c5b29322e6c1e0fbcfa747f62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5c37419b1d12bd65c7f3d84eb6dd09ddced131c5b29322e6c1e0fbcfa747f62->enter($__internal_f5c37419b1d12bd65c7f3d84eb6dd09ddced131c5b29322e6c1e0fbcfa747f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeVisite:add.html.twig"));

        $__internal_41764283366f600d0894f465ac6c2434238d5c4886b5278e044fb4d48a50506c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41764283366f600d0894f465ac6c2434238d5c4886b5278e044fb4d48a50506c->enter($__internal_41764283366f600d0894f465ac6c2434238d5c4886b5278e044fb4d48a50506c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeVisite:add.html.twig"));

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
        
        $__internal_f5c37419b1d12bd65c7f3d84eb6dd09ddced131c5b29322e6c1e0fbcfa747f62->leave($__internal_f5c37419b1d12bd65c7f3d84eb6dd09ddced131c5b29322e6c1e0fbcfa747f62_prof);

        
        $__internal_41764283366f600d0894f465ac6c2434238d5c4886b5278e044fb4d48a50506c->leave($__internal_41764283366f600d0894f465ac6c2434238d5c4886b5278e044fb4d48a50506c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_552ee3df5f03417d6a1f5a0022f2a815199dc3bc1a296ebb266eaa454ab027c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_552ee3df5f03417d6a1f5a0022f2a815199dc3bc1a296ebb266eaa454ab027c9->enter($__internal_552ee3df5f03417d6a1f5a0022f2a815199dc3bc1a296ebb266eaa454ab027c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f13d95979b7a72a4c74cc1cbcee09cc12f18ffabc253f6e90ed004be5568ab60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f13d95979b7a72a4c74cc1cbcee09cc12f18ffabc253f6e90ed004be5568ab60->enter($__internal_f13d95979b7a72a4c74cc1cbcee09cc12f18ffabc253f6e90ed004be5568ab60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Type de visite ";
        
        $__internal_f13d95979b7a72a4c74cc1cbcee09cc12f18ffabc253f6e90ed004be5568ab60->leave($__internal_f13d95979b7a72a4c74cc1cbcee09cc12f18ffabc253f6e90ed004be5568ab60_prof);

        
        $__internal_552ee3df5f03417d6a1f5a0022f2a815199dc3bc1a296ebb266eaa454ab027c9->leave($__internal_552ee3df5f03417d6a1f5a0022f2a815199dc3bc1a296ebb266eaa454ab027c9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_734ff4760016ce921035173df578046fae14b1c9035b1482e9aa58cc8dc9ec7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_734ff4760016ce921035173df578046fae14b1c9035b1482e9aa58cc8dc9ec7b->enter($__internal_734ff4760016ce921035173df578046fae14b1c9035b1482e9aa58cc8dc9ec7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a36bf804e9b3be865e079d393eb8d2fc00a0a978383ae7fae81ac68f324674fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a36bf804e9b3be865e079d393eb8d2fc00a0a978383ae7fae81ac68f324674fe->enter($__internal_a36bf804e9b3be865e079d393eb8d2fc00a0a978383ae7fae81ac68f324674fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a36bf804e9b3be865e079d393eb8d2fc00a0a978383ae7fae81ac68f324674fe->leave($__internal_a36bf804e9b3be865e079d393eb8d2fc00a0a978383ae7fae81ac68f324674fe_prof);

        
        $__internal_734ff4760016ce921035173df578046fae14b1c9035b1482e9aa58cc8dc9ec7b->leave($__internal_734ff4760016ce921035173df578046fae14b1c9035b1482e9aa58cc8dc9ec7b_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtTypeVisite:add.html.twig";
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
{% endblock %}", "AdminBundle:CtTypeVisite:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtTypeVisite/add.html.twig");
    }
}
