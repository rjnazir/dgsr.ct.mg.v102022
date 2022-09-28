<?php

/* AdminBundle:CtMotif:add.html.twig */
class __TwigTemplate_b1b3e47d3fd60223892ccef78deea89175582d3fd735a9f5273a59ce73daa165 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtMotif:add.html.twig", 1);
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
        $__internal_72c5492b2023b7d6d29c833476461d422ee3eff75cb18bf9ddff4d5e3f62c62f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72c5492b2023b7d6d29c833476461d422ee3eff75cb18bf9ddff4d5e3f62c62f->enter($__internal_72c5492b2023b7d6d29c833476461d422ee3eff75cb18bf9ddff4d5e3f62c62f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMotif:add.html.twig"));

        $__internal_c3482bfc3272f3855fe30a462764c84cebf0db6e668bc8a657f9aed6429e86fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3482bfc3272f3855fe30a462764c84cebf0db6e668bc8a657f9aed6429e86fe->enter($__internal_c3482bfc3272f3855fe30a462764c84cebf0db6e668bc8a657f9aed6429e86fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMotif:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_motif"] = true;
        // line 8
        $context["menu_motif_type"] = true;
        // line 9
        $context["menu_motif_type_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72c5492b2023b7d6d29c833476461d422ee3eff75cb18bf9ddff4d5e3f62c62f->leave($__internal_72c5492b2023b7d6d29c833476461d422ee3eff75cb18bf9ddff4d5e3f62c62f_prof);

        
        $__internal_c3482bfc3272f3855fe30a462764c84cebf0db6e668bc8a657f9aed6429e86fe->leave($__internal_c3482bfc3272f3855fe30a462764c84cebf0db6e668bc8a657f9aed6429e86fe_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7436e3fa5ec225d9f0b6fc2c153d87208f08ba1f59b02c6969618829174015d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7436e3fa5ec225d9f0b6fc2c153d87208f08ba1f59b02c6969618829174015d1->enter($__internal_7436e3fa5ec225d9f0b6fc2c153d87208f08ba1f59b02c6969618829174015d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5dc9ca7d6baf5e2d1025410f827d9002627fc7c6170a3e1d27ac2f2b55e6480f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dc9ca7d6baf5e2d1025410f827d9002627fc7c6170a3e1d27ac2f2b55e6480f->enter($__internal_5dc9ca7d6baf5e2d1025410f827d9002627fc7c6170a3e1d27ac2f2b55e6480f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout motif ";
        
        $__internal_5dc9ca7d6baf5e2d1025410f827d9002627fc7c6170a3e1d27ac2f2b55e6480f->leave($__internal_5dc9ca7d6baf5e2d1025410f827d9002627fc7c6170a3e1d27ac2f2b55e6480f_prof);

        
        $__internal_7436e3fa5ec225d9f0b6fc2c153d87208f08ba1f59b02c6969618829174015d1->leave($__internal_7436e3fa5ec225d9f0b6fc2c153d87208f08ba1f59b02c6969618829174015d1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_52712af5e296800feec87f72adbcf77e765c02f6f3d652a4881a6cf330a2cd15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52712af5e296800feec87f72adbcf77e765c02f6f3d652a4881a6cf330a2cd15->enter($__internal_52712af5e296800feec87f72adbcf77e765c02f6f3d652a4881a6cf330a2cd15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_88e4f4e9ef141af26c28f724b166eb6c69d6f66772964d6b84787225b145a96c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88e4f4e9ef141af26c28f724b166eb6c69d6f66772964d6b84787225b145a96c->enter($__internal_88e4f4e9ef141af26c28f724b166eb6c69d6f66772964d6b84787225b145a96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer une motif</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mtfLibelle", array()), 'row');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mtfIsCalculable", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_motif\"/>
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_index");
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
        
        $__internal_88e4f4e9ef141af26c28f724b166eb6c69d6f66772964d6b84787225b145a96c->leave($__internal_88e4f4e9ef141af26c28f724b166eb6c69d6f66772964d6b84787225b145a96c_prof);

        
        $__internal_52712af5e296800feec87f72adbcf77e765c02f6f3d652a4881a6cf330a2cd15->leave($__internal_52712af5e296800feec87f72adbcf77e765c02f6f3d652a4881a6cf330a2cd15_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtMotif:add.html.twig";
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

{% block title %}{{ parent() }} Ajout motif {% endblock %}

{% set menu_motif           = true %}
{% set menu_motif_type      = true %}
{% set menu_motif_type_create = true %}

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
                        <h3 class=\"box-title\">Créer une motif</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.mtfLibelle) }}
                        {{ form_row(form.mtfIsCalculable) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_motif\"/>
                        <a href=\"{{ path('motif_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtMotif:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtMotif/add.html.twig");
    }
}
